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

    </script>
    <style>
    #respuesta {
        display: none;
    }

    #row_descuento {
        display: none;
    }
    </style>
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
        <hr style="width:34%">
        <h1 class="title-price">Cotizacion</h1>
        <hr style="width:34%">
        <p style="text-align:center">
    </section>
    <section id="form_descuento">
        <div id="prueba"></div>
        <form class="form_descuento" style="display:block" action="guardar_plan_internet.php" method="post">
            <div class="container-form ">
                <div class="row-form">
                    <div class="column-tow-cotizar">
                        <div class="column-team3a">
                            <div class="container-cotizacion">

                                <fieldset style="
    border-radius: 12px;
    text-align: center;
">
                                    <span><b>Tipo de cliente:</b></span>
                                    Persona Natural<input type="radio" required onchange="activardescuento(this)"
                                        name="opcion" value="persona">
                                    Empresa<input type="radio" name="opcion" required onchange="activardescuento(this)"
                                        value="empresa">
                                </fieldset>

                                <div id="form" class="column-four-cotizar">
                                    <label for="fname">Nombre</label>
                                    <input type="text" id="fname" name="Nombre" required placeholder="Su nombre..">

                                    <label for="lname">Apellido</label>
                                    <input type="text" id="lname" name="Apellido" required placeholder="Su apellido..">

                                    <label for="lCedula">Cedula o nit</label>
                                    <input type="text" id="lcedula" name="Cedulanit" required
                                        placeholder="Su cedular o nit..">

                                    <label for="ltelefono">Telefono</label>
                                    <input type="text" id="ltelefono" name="Telefono" required
                                        placeholder="Su telefono..">

                                    <label for="lcorreo">Correo</label>
                                    <input type="text" id="lcorreo" name="Correo" required placeholder="Su correo..">

                                    <label for="ciudad">Ciudad</label>
                                    <select id="country" name="Ciudad" required>
                                        <option>Seleccione</option>
                                        <!-- Imporamos un fragmento de php para cargar los combos -->
                                        <?php
                                    $d=include('dbphp/conexiondb.php');
                                    //include('dbphp/conexion.php'); 
                                    //Buscamos la informacion de la tabla ciudades.
                                    $consulta = "SELECT * FROM Ciudades";
                                    $resultado = mysqli_query( $d, $consulta ) or die ( "No se pueden llenar los campos");
                                    //Cargamos el combo y mostrarmos la informacion.
                                    foreach ($resultado as $key => $value) {
                                         echo $value;
                                         echo '<option value='.($key+1).'>'.$value['Nombre'].'</option>';
                                    }
                                   
                                ?>

                                    </select>





                                </div>
                            </div>
                            <div class="table-container">
                                <?php
        $d=include('dbphp/conexiondb.php');
       
        $consulta; 
        //Verificamos en que plan estamos segun lo asignado por la variable 'SESSION' luego de procesar el formulario.
        if($_SESSION['valor']==='basico'){
            $consulta = "SELECT * FROM planes WHERE nomb_plan LIKE '%basico%'";
        }
        else if($_SESSION['valor']==='familiar'){
            $consulta = "SELECT * FROM planes WHERE nomb_plan LIKE '%familiar%'";
        }
        else{
            $consulta = "SELECT * FROM planes WHERE nomb_plan LIKE '%premium%'";
        }

        
        $resultado = mysqli_query( $d, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

        //Si obtenemos un resultado recorremos la informacion mostrando la tabla correspondiente.
        if ($resultado->num_rows > 0) {
        // output data of each row
        
        switch ($_SESSION['valor']) {
            case 'basico':
            echo '<style type="text/css">
        
        #Planbtnfamiliar{
            display: none;
        }
       
        #PlanbtnPrimium{
            display: none;
        }
        </style>';
                break;
            case 'familiar':
              echo '<style type="text/css">
         #Planbtnbasico{
            display: none;
        }
       
         #PlanbtnPrimium{
            display: none;
        }
        </style>';
             
                break;
            case 'premium':
              echo '<style type="text/css">
        
         #Planbtnbasico{
            display: none;
        }

        #Planbtnfamiliar{
            display: none;
        }
       
        </style>';
                break;
            
            default:
                # code...
                break;
        }
        //Recorremos la informacion.
        while($row = $resultado->fetch_assoc()) {
            
        echo '<br><table  class='.str_replace(" ","_",$row["nomb_plan"]).'>
                            <tr>
                                <th style="text-align:center;background-color: #193441;color: white;font-size: 25px;" colspan="3">'
                                       .'Plan '.$row["nomb_plan"].' 
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">Almacenamiento</th>
                                <th><input  name="almacenamiento"  id="almacenamiento" readonly onchange="cambiarprecio(this)" value='. $row["almacenamiento"] .'  min='. $row["velocidad"] .' max="80" type="number" step="10"> GB</th>
                            </tr>
                            <tr>
                                <td colspan="2">Velocidad</td>
                                <td><input  name="velocidad" id="velocidad" readonly onchange="cambiarprecio(this)" value='. $row["velocidad"] .'   min='.$row["velocidad"].' max="80" type="number"  step="10"> GB</td>
                            </tr>
                             <tr  style="background-color:#FF5733;color:white" id="row_descuento">
                                <td colspan="2">Descuento</td>
                                <td><input type="text" name="descuento"  id="descuento" value="" style="width:100px !important;border: none !important;pointer-events: none;" readonly> %<input hidden type="text" id="descuentooriginal" name="descuento" value='. $row["descuento"] .' style="width:128px !important;border: none !important;pointer-events: none;" readonly></td>
                            </tr>
                            <tr>
                                <th colspan="2">Precio</th>
                                <th><input type="hidden"   id="preciooriginal" value='. $row["precio_plan"] .' style="width:100px !important;border: none !important;pointer-events: none;" readonly><input type="text"  name="precio_plan" id="precio" value='. $row["precio_plan"] .' style="width:128px !important;border: none !important;pointer-events: none;" readonly>Cop</th>
                            </tr>
                            
                        </table>
                        <br>
                        <input  type="submit"  id='.str_replace(" ","btn",$row["nomb_plan"]).' value="Seleccionar"><br><br>';
        }
        } else {
        echo "0 results";
        }
      //Cerramos la conexion.
      mysqli_close($d);
        ?>
                            </div>

                        </div>

                        <br>

                    </div>
                </div>
            </div>

            <br>


        </form>
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
    <script src="js/calculocotizarinternet.js"></script>
</body>


</html>