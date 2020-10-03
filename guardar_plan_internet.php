<?php
// Start the session
session_start();
$valor;
        if(isset($_GET['valor'])){
        $valor=$_GET['valor'];
        $_SESSION["valor"] =  $valor;
          
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    function volver(back_nav) {
        window.history.back();
    }
    </script>
</head>

<body>

    <div class="topnav">
        <a href="persona.html">Persona</a>
        <a href="empresa.html">Empresa</a>
        <!-- <a href="#nosotros">Nosotros</a> -->
        <div class="dropdown">
            <button onclick="navegar('nosotros')" class="dropbtn">Nosotros
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="politica-datos.html">Politica de tratamiento de datos</a>
                <a href="pqrs.html">PRQS</a>
            </div>
        </div>

        <div class="search-container">
            <form action="/action_page.php">
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Buscar..." name="search">
            </form>
        </div>
    </div>
    <div id="navbar">
        <span href="#default" id="logo">OrizonMobile<br><span
                style="font-size: 14px;margin-top: -12px;text-align: center" id="logo-subtext">The Unlimited
                Network</span></span>
        <div id="navbar-right">
            <a href="internet.html">Internet</a>
            <a href="telefonia.html">Telefonia</a>
            <a href="productos.html">Productos</a>
            <a href="servicios.html">Servicios</a>
            <a href="contactenos.html">Soporte</a>
        </div>
    </div>
    <ul class="breadcrumb">
        <li><a href="index.html">Inicio</a></li>
        <li>Cotizacion</li>
    </ul>

    <section>
        <div class="container-imagen">
            <div class="hero-imagen4">
                <div class="hero-text-left">
                    <span>Cotización</span>
                    <h2>Atencion de calidad</h2>
                    <!--<button>Mas información</button> -->
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php
        //Verifiamos si existe la variable pasada por el metodo POST
          if(isset($_POST['almacenamiento'])){
         $pais=$_POST['Ciudad'];
         //Cambiamos la variable pais por el texto correspondiente de cada pais.
         //Para poderlo visualizar.
         if($pais==='1'){
             $pais='Colombia';
         }
         else if($pais==='2'){
             $pais='Peru';
         }
         else{
             $pais='Chile';
         }
        }
        //Dependiendo de la session nos conectamos a la base de datos.
        if(isset($_SESSION['valor'])){
        $d=include('dbphp/conexiondb.php');

        $consulta; 
        // Si esxiste la variable nombre... y telefono...
        if(isset($_POST['Nombre'])){
            //Insertar persona;
            if(isset($_POST['Telefono'])){
                //Guardamos en variables la informacion del usuario.
                $nombre = $_POST['Nombre'];
                $apellido = $_POST['Apellido'];
                $telefono = $_POST['Telefono'];
                $ciudad = $_POST['Ciudad'];
                $cedula = $_POST['Cedulanit'];
                $correo_persona = $_POST['Correo'];
                $nuevo_precio = $_POST['precio_plan'];
                $tipo_cliente = $_POST['opcion'];
                $descuento = $_POST['descuento'];
                $plan_find = 'Plan '.$_SESSION['valor'];

               
              // Buscar usuario:
            //Buscamos si el usuario ya se encuentra registrado.
            $consulta_usuario = "SELECT count(per.Id_Persona) as 'Persona',Id_Persona FROM personas per WHERE per.Correo_persona='".$correo_persona."' or per.Cedula_persona='".$cedula."';";
            $resultado_usuario = mysqli_query($d, $consulta_usuario) or die ( "Error al realizar la consulta Buscar usuario".mysqli_error($d));
            $row_usuario = $resultado_usuario->fetch_assoc();
            $id_persona= $row_usuario['Id_Persona'];
            $consulta_query='';

  
             // Ahora buscamos si el usuario ya tiene ese plan en la tabla descuentos.        
                //Buscar id plan
            $consulta_plan_id="SELECT Id_plan FROM `dbrealitymobille`.`planes` WHERE nomb_plan LIKE '%".$_SESSION['valor']."%'";
            $resultado_plan_id = mysqli_query($d, $consulta_plan_id) or die ( "Error al realizar la consulta Buscar id plan".mysqli_error($d));
            $row_plan_id = $resultado_plan_id->fetch_assoc();
            $id_plan = $row_plan_id['Id_plan']; 
            //$row_plan_id = $resultado_plan_id -> fetch_all(MYSQLI_ASSOC);
           
            
    
            // Buscar persona en descuento
            $consulta_plan= "SELECT Id_Plan from descuentos des JOIN personas per ON des.Id_Persona= per.Id_Persona where des.Id_Plan='".$id_plan."' and per.Cedula_persona='".$cedula."';";
            $resultado_plan = mysqli_query($d, $consulta_plan) or die ( "Error al realizar la consulta Buscar persona en descuento".mysqli_error($d));
            //echo mysqli_result($resultado_plan);
            $row_plan = $resultado_plan->fetch_assoc();
            
            
            // Verificamos si.
            // 1) Si obtenemos algun resultado de la tabla plan dependiento de la cedula del usuario.
            // y 2) la consulta del usuario nos devuelve un conteno igual a cero.
            if( mysqli_num_rows($resultado_plan)==0 &&  $row_usuario['Persona']==0){
                //Entonces registramos el usuario nuevo y el plan de internet que a seleccionado.
                $consulta_query = "INSERT INTO `dbrealitymobille`.`personas` (`Cedula_persona`,`Nomb_persona`, `Apell_persona`, `Telefono_persona`, `Correo_persona`,`Ciudad_persona`) VALUES ('".$cedula."','".$nombre."','".$apellido."','".$telefono."','".$correo_persona."','".$ciudad."');";
                $consulta_query .= "SET @Id_plan = (SELECT Id_plan FROM `dbrealitymobille`.`planes` WHERE nomb_plan LIKE '%".$_SESSION['valor']."%');";
                $consulta_query .= "INSERT INTO `dbrealitymobille`.`descuentos` (`Id_Persona`, `Id_Plan`,`Tipo_cliente`, `Nuevo_precio`, `Descuento`) VALUES (LAST_INSERT_ID(),(SELECT @Id_plan),'".$tipo_cliente."',$nuevo_precio,$descuento);";
                $resultado = mysqli_multi_query( $d, $consulta_query ) or die ( "Error al hacer la consulta plan".mysqli_error($d));
                                         
                   echo '   <fieldset style="background: #D5EFC2;border-color: #49A94A;color: green !important;">
                        <p class="title" style="color:green !important;padding:10px 10px;">Usuario registrado con exito.</p>
                        </fieldset>
                        <br>
                        <br>'; 
                 //Mostramos la informacion delplan escogido y la informacion de la persona.       
                echo '<hr style="width:34%"><div>
                <div class="column-tow">
                <div class="column-team3">
                    <div class="card">
                            <img src="./imagenes/contactagent.jpg" alt="Jane" style="width:100%">
                            <div class="container-info">
                                <h2>Jane Doe</h2>
                                <p class="title">
     
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
                <div id="form" class="column-five-cotizar">
                <table>
                  <tr>
                        <th style="color: white;text-align:center;font-size:24px;background-color: green !important;" colspan="4">Detalles Pedido</th>
                               
                        </tr>
                        <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Ciudad</th>
                            </tr>
                            <tr>
                                <td>'. $_POST['Nombre'].'</td>
                                <td>'. $_POST['Apellido'].'</td>
                                <td>'. $_POST['Telefono'].'</td>
                                <td>'. $pais.'</td>
                                
                            </tr>
                            <tr>

                                
                                 <th>Plan</th>
                                <th>Velocidad</th>
                                <th>Almacenamiento</th>
                                <th>Tipo de cliente</th>
                            </tr>
                            <tr>
                                <td>Plan '. $_SESSION["valor"].'</td>
                                <td>'. $_POST['velocidad'].' Gb</td>
                                <td>'. $_POST['almacenamiento'].' Gb</td>
                                <td>'. $_POST['opcion'].'</td>
                               
                            </tr>
                            <tr>
                            <td colspan="4">
                            <p><button class="button3" onclick="navegar()">TERMINAR</button></p>
                            </td>
                            </tr>
                    </table>
                </div>
            </div><br><br>';
           
            }
            //de lo contrario si de la tabla plan obtenemos mas de un resultado.
            //Notificamos que ese usuario ya cuenta con ese plan.
            else if(mysqli_num_rows($resultado_plan)>0){
                                echo '<div class="container-resultado-datos"><div >
                                <hr style="width:34%">
                                <h1 class="title-price">Atencion!</h1>
                                <hr style="width:34%">
                                <fieldset style="background: #F8D7DA;border-color: red;color: #F8D7DA !important;">
                                <p class="title" style="color: red !important;">El usuario ya cuenta con este plan.</p>
                                </fieldset>
                                </div>
                            </div>
                            <br>'; 
            }
            //y si el usaurio ya existe
            //Notificamos que el usuario ya esta registrado.
            else if($row_usuario['Persona']>0){
                 echo '<div class="container-resultado-datos"><div >
                                <hr style="width:34%">
                                <h1 class="title-price">Atencion!</h1>
                                <hr style="width:34%">
                                <fieldset style="background: #F8D7DA;border-color: red;color: #F8D7DA !important;">
                                <p class="title" style="color: red !important;">El usuario ya cuenta registrado solo se guardara la informacion del plan.</p>
                                </fieldset>
                                </div>
                            </div>
                            <br>'; 

                    //Realizamo la consulta para registrar solo el plan de la persona y no el usuario.         
                    $consulta_query .= "SET @Id_plan = (SELECT Id_plan FROM `dbrealitymobille`.`planes` WHERE nomb_plan LIKE '%".$_SESSION['valor']."%');";
                    $consulta_query .= "INSERT INTO `dbrealitymobille`.`descuentos` (`Id_Persona`, `Id_Plan`,`Tipo_cliente`, `Nuevo_precio`, `Descuento`) VALUES ('". $id_persona."',(SELECT @Id_plan),'".$tipo_cliente."',$nuevo_precio,$descuento);";
                    $resultado = mysqli_multi_query( $d, $consulta_query ) or die ( "Error al hacer la consulta persona".mysqli_error($d));
                     //MOstramos la informacion
                    echo '<hr style="width:34%"><div>
                <div class="column-tow">
                <div class="column-team3">
                    <div class="card">
                            <img src="./imagenes/contactagent.jpg" alt="Jane" style="width:100%">
                            <div class="container-info">
                                <h2>Jane Doe</h2>
                                <p class="title">
     
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
                <div id="form" class="column-five-cotizar">
                <table>
                  <tr>
                        <th style="color: white;text-align:center;font-size:24px;background-color: green !important;" colspan="4">Detalles Pedido</th>
                               
                        </tr>
                        <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Ciudad</th>
                            </tr>
                            <tr>
                                <td>'. $_POST['Nombre'].'</td>
                                <td>'. $_POST['Apellido'].'</td>
                                <td>'. $_POST['Telefono'].'</td>
                                <td>'. $pais.'</td>
                                
                            </tr>
                            <tr>

                                
                                 <th>Plan</th>
                                <th>Velocidad</th>
                                <th>Almacenamiento</th>
                                <th>Tipo de cliente</th>
                            </tr>
                            <tr>
                                <td>Plan '. $_SESSION["valor"].'</td>
                                <td>'. $_POST['velocidad'].' Gb</td>
                                <td>'. $_POST['almacenamiento'].' Gb</td>
                                <td>'. $_POST['opcion'].'</td>
                               
                            </tr>
                            <tr>
                            <td colspan="4">
                            <p><button class="button3" onclick="navegar()">TERMINAR</button></p>
                            </td>
                            </tr>
                    </table>
                </div>
            </div><br><br>';
                            
                            
            }
             else{
            //Notificamos  que no se a relizado ninguana accion.
             echo 'Se debe ingresar sus datos pesonales';
            }
        }
        
    }}
   

        ?>



        <br>

    </section>
    <section>
        <div class="footer">
            <div class="row-footer">
                <div class="column-footer">
                    <h2><b>Lo que tenemos para ti</b></h2>
                    <ul class="menu-footer">
                        <li><a href="internet.html">Internet</a></li>
                        <li><a href="telefonia.html">Telefonia</a></li>
                        <li><a href="productos.html">Productos</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="soporte.html">Soporte</a></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <h2><b>Nosotros</b></h2>
                    <ul class="menu-footer">
                        <li><a href="empresa.html">Empresa</a></li>
                        <li><a href="persona.html">Persona</a></li>
                    </ul>
                    <br>
                    <h2><b>Servicios</b></h2>
                    <ul class="menu-footer">
                        <li><a href="empresa.html">Empresa</a></li>
                        <li><a href="persona.html">Persona</a></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <ul class="social-medias">
                        <li><i class="fa fa-facebook fa-3x"></i></li>
                        <li><i class="fa fa-twitter fa-3x"></i></li>
                        <li><i class="fa fa-instagram fa-3x"></i></li>
                    </ul>
                    <form id="form-newsletter" action="/action_page.php">


                        <div>
                            <input type="text" placeholder="Email address" name="mail" required>
                        </div>

                        <div class="container">
                            <input type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php


?>
    <script src="js/app.js"></script>
</body>


</html>