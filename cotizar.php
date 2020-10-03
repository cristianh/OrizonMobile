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
    function verificar() {
        console.log("...........", window.location.search.substr(4, 2));
        var idelement = window.location.search.substr(4, 2);
        var elemento = document.getElementById('e' + idelement).style.display = 'block';
        var elemento = document.getElementById('foto' + idelement).style.display = 'block';
    }
    </script>

    <style>
    #foto1,
    #foto2,
    #foto3,
    #foto4,
    #foto5,
    #foto6,
    #foto7,
    #foto8,
    #foto9,
    #foto10,
    #foto11,
    #foto12 {
        display: none;
        ,
    }
    </style>
</head>

<body onload="verificar()">

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
        <li>Comprar</li>
    </ul>
    <section>

        <div class="container-imagen">
            <div class="hero-imagen11">
                <div class="hero-text-left">
                    <span>Compra tu celular</span>
                    <h2>Equipos para ti</h2>
                    <!-- <button>Mas información</button> -->
                </div>
            </div>
        </div>
    </section>


    <?php
    //Cargamos los parametros de la base de datos.
$d = include 'dbphp/conexiondb.php';


$valor_descuento;
$valor_precio;

//Dependiento de las opciones del dispositivo movil seleccionado se aplican los correspondientes descuentos.
if ($_POST['ramopcion'] == '16 GB de RAM, 64 GB de Flash.') {
    $valor_descuento = round($_POST['precio'] * 0.08);
}

if ($_POST['redessociales'] === 'Whatsapp + facebook + instagram' || $_POST['redessociales'] === 'Whatsapp + facebook' || $_POST['redessociales'] === 'Whatsapp') {
    $valor_descuento = round($_POST['precio'] * 0.02);
}

if ($_POST['datosmovilesopcion'] === '4 GB') {
    $valor_descuento = round($_POST['precio'] * 0.09);
}

$valor_precio = $_POST['precio'] - $valor_descuento;
$_POST['precio'] = $valor_precio;

//Guardamos la informacion del usuario.
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$telefono = $_POST['Telefono'];
$ciudad = $_POST['ciudad'];

if ($ciudad == '1') {
    $ciudad = 'Colombia';
} else if ($ciudad == '2') {
    $ciudad = 'Peru';
} else {
    $ciudad = 'Chile';
}
//Guardamos el index para hacer el guardado con la tabla relacionada.
if ($ciudad == 'Colombia') {
    $ciudad_seleccinada = 1;
} else if ($ciudad == 'Peru') {
    $ciudad_seleccinada = 2;
} else {
    $ciudad_seleccinada = 3;
}
//Asiganamos en variables la informacion del celular seleccionado.
$nombre_celular = $_POST['Nombre_celular'];
$datos_celular = $_POST['datosmovilesopcion'];
$memoria_celular = $_POST['ramopcion'];
$almacenamiento_celular = $_POST['ramopcion'];
$sistemaop_celular = $_POST['operativoopcion'];
$procesador_celular = $_POST['Nombre_celular'];
$precio_celular = $_POST['precio'];
$descuento_celular = $valor_descuento;
$correopersona = $_POST['lcorreopersona'];
$cedula = $_POST['Cedula'];

//Realizamos las consultas si el usuario se encuentra registrado en la tabla personas
$consulta_busqueda_query = "SELECT * FROM `dbrealitymobille`.`personas` WHERE Cedula_persona='" . $cedula . "';";
$resultado_busqueda_query = mysqli_query($d, $consulta_busqueda_query);

//Si optenemos una fila.
if (mysqli_num_rows($resultado_busqueda_query) > 0) {
    $consulta_query = "INSERT INTO `dbrealitymobille`.`ventas_celular` (`Id_Persona`,`Nom_celular`,`datos_celular`, `Memoria_celular`,`Sistemaop_celular`,`Procesador_celular`,`Precio_celular`,`Descuento_celular`) VALUES (LAST_INSERT_ID(),'" . $nombre_celular . "','" . $datos_celular . "','" . $memoria_celular . "','" . $sistemaop_celular . "','" . $procesador_celular . "','" . $precio_celular . "','" . $descuento_celular . "');";
    $resultado = mysqli_query($d, $consulta_query);
    //Notificamos que el usuario ya esta y solo se guardara la informacion del celular
    echo '<div class="container-resultado-datos"><div >
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">Atencion!</h1>
                        <hr style="width:34%">
                        <fieldset style="background: #F8D7DA;border-color: red;color: #F8D7DA !important;">
                        <p class="title" style="color: red !important;">El usuario ya se encuentra registrado, solo se guardara la informacion de la compra.</p>
                        </fieldset>
                        </div>
                    </div>
                    <br>';
    echo '<div class="container-resultado-datos"><div >
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">Detalles del pedido</h1>
                        <hr style="width:34%">

                        <p class="title">
                            <table>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Ciudad</th>
                                </tr>
                                <tr>
                                    <td>' . $_POST['Nombre'] . '</td>
                                    <td>' . $_POST['Apellido'] . '</td>
                                    <td>' . $_POST['Telefono'] . '</td>
                                    <td>' . $ciudad . '</td>
                                </tr>
                                <tr>
                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                    <th>Redes - sociales</th>
                                </tr>
                                <tr>
                                    <td>
                                       ' . $_POST['operativoopcion'] . '
                                    </td>
                                    <td>
                                        ' . $_POST['ramopcion'] . '
                                    </td>
                                    <td>
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.
                                    </td>
                                    <td>
                                        ' . $_POST['redessociales'] . '
                                    </td>
                                    </tr>
                                <tr>

                                    <th colspan="2">Descuento: $<input type="text" id="precio" style="text-align:left;border:none;width: 120px;background-color: red;color:white;font-weight: bold;font-size: 24px;" readonly value=' . $valor_descuento . ' name="precio"> </th>
                                    <th colspan="2" style="text-align: end;">Total:  $<input type="text" id="precio" style="text-align:left;border:none;width: 120px;background-color: white;font-weight: bold;font-size: 24px;" readonly value=' . $valor_precio . ' name="precio"> <b>Cop</b></th>
                                </tr>

                            </table>
                        </p>
                    </div></div><br>
                    <p><button style="width:55%;margin-left:23%" class="button3" onclick="navegar()">TERMINAR</button></p>';

} else {
    // de lo contrario guardamos la informacion del usuario 
    // y de el celular seleccionado.
    $consulta_query = "INSERT INTO `dbrealitymobille`.`personas` (`Cedula_persona`,`Nomb_persona`, `Apell_persona`, `Telefono_persona`,`Correo_persona`, `Ciudad_persona`) VALUES ('" . $cedula . "','" . $nombre . "','" . $apellido . "','" . $telefono . "','" . $correopersona . "','" . $ciudad_seleccinada . "');";
    $consulta_query .= "INSERT INTO `dbrealitymobille`.`ventas_celular` (`Id_Persona`,`Nom_celular`,`datos_celular`, `Memoria_celular`,`Sistemaop_celular`,`Procesador_celular`,`Precio_celular`,`Descuento_celular`) VALUES (LAST_INSERT_ID(),'" . $nombre_celular . "','" . $datos_celular . "','" . $memoria_celular . "','" . $sistemaop_celular . "','" . $procesador_celular . "','" . $precio_celular . "','" . $descuento_celular . "');";
    $resultado = mysqli_multi_query($d, $consulta_query);
    echo '<div class="container-resultado-datos"><div >
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">Atencion!</h1>
                        <hr style="width:34%">
                        <fieldset style="background: #D5EFC2;border-color: #49A94A;color: green !important;">
                        <p class="title" style="color:green !important;padding:10px 10px;">Usuario registrado con exito.</p>
                        </fieldset>
                        </div>
                    </div>';
    //Mostramos los detalles del pedido.
    echo '<div class="container-resultado-datos"><div >
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">Detalles del pedido</h1>
                        <hr style="width:34%">

                        <p class="title">
                            <table>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Ciudad</th>
                                </tr>
                                <tr>
                                    <td>' . $_POST['Nombre'] . '</td>
                                    <td>' . $_POST['Apellido'] . '</td>
                                    <td>' . $_POST['Telefono'] . '</td>
                                    <td>' . $_POST['ciudad'] . '</td>
                                </tr>
                                <tr>
                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                    <th>Redes - sociales</th>
                                </tr>
                                <tr>
                                    <td>
                                       ' . $_POST['operativoopcion'] . '
                                    </td>
                                    <td>
                                        ' . $_POST['ramopcion'] . '
                                    </td>
                                    <td>
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.
                                    </td>
                                    <td>
                                        ' . $_POST['redessociales'] . '
                                    </td>
                                    </tr>
                                <tr>

                                    <th colspan="2">Descuento: $<input type="text" id="precio" style="text-align:left;border:none;width: 120px;background-color: red;color:white;font-weight: bold;font-size: 24px;" readonly value=' . $valor_descuento . ' name="precio"> </th>
                                    <th colspan="2" style="text-align: end;">Total:  $<input type="text" id="precio" style="text-align:left;border:none;width: 120px;background-color: white;font-weight: bold;font-size: 24px;" readonly value=' . $valor_precio . ' name="precio"> <b>Cop</b></th>
                                </tr>

                            </table>
                        </p>
                    </div></div><br>
                    <p><button style="width:55%;margin-left:23%" class="button3" onclick="navegar()">TERMINAR</button></p>';

}

?>




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
    <script src="js/app.js"></script>
</body>


</html>