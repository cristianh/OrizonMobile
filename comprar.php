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

        /**
         * Funcion que se encarga de verificar que parametro esta recibiendo la pagina para
         * habilidar la tabla correspondiente al celular seleccionado.
         */
        function verificar() {
            console.log("...........", window.location.search.substr(4, 2));
            var idelement = window.location.search.substr(4, 2);
            var elemento = document.getElementById('e' + idelement).style.display = 'block';
            var elemento = document.getElementById('foto' + idelement).style.display = 'block';
        }
    </script>
    
    <style>
        #foto1,#foto2,#foto3,#foto4,#foto5,#foto6,#foto7,#foto8,#foto9,#foto10,#foto11,#foto12{
            display:none;
        ,}
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
        <li><a  href="index.html">Inicio</a></li>
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
    <section>
    <div>
        <fieldset>
        <form action="cotizar.php" method="post">
            <div class="container-form ">
                <h1 class="title-price">Comprar</h1>
                <hr style="width: 70%">
                <p style="text-align:center">grandes ofertas</p>
                <br>
            </div>
            
            <div class="row-form">
                
               <div style="margin-left: 2%;" class="container-form ">
               <div>
                    <div id="form" class="column-tow-comprar">
                       
                        <label for="fname">Nombre</label>
                        <input type="text" id="Nm" name="Nombre" required placeholder="Su nombre..">

                        <label for="lname">Apellido</label>
                        <input type="text" id="ap" name="Apellido" required placeholder="Su apellido..">

                        <label for="lname">Telefono</label>
                        <input type="text" id="tl" name="Telefono" required placeholder="Su apellido..">

                        <label for="lCedula">Cedula o nit</label>
                        <input type="text" id="lcedula" name="Cedula" required placeholder="Su cedular o nit..">

                        <label for="lcorreopersona"><b>Correo:</b></label>
                        <input type="text"  id="lcorreopersona"  name="lcorreopersona" placeholder="Su correo..">
                       
                        <label for="ciudad">Ciudad</label>
                        <select id="country" name="ciudad">
                                        <option value="selecione">Seleccione</option>
                                        <option value="1">Colombia</option>
                                        <option value="2">Peru</option>
                                        <option value="3">Chile</option>
                                      </select>

                    </div>
                    
                </div>
                <div class="container-info-datos">
                    <div>
                        <div id="foto1" class="card">
                            <img src="./imagenes/celulares/Celular-Nokia.png" alt="Nokia" style="width:100%">
                        </div>
                    </div>
                    <div>
                        <div id="foto2" class="card">
                            <img src="./imagenes/celulares/Celular-apple.png" alt="Apple" style="width:100%">
                        </div>
                    </div>
                    <div>
                          <div id="foto3" class="card">
                            <img src="./imagenes/celulares/Celular-Samsung.png" alt="Sansung"
                                style="width:100%">
                        </div>
                    </div>
                    <div>
                        <div id="foto4" class="card">
                            <img src="./imagenes/celulares/Celular-Lanix.png" alt="Jane"
                                style="width:100%">
                        </div>
                    </div>
                    <div>
                        <div id="foto5" class="card">
                            <img src="./imagenes/celulares/Celular-Alcatel.png" alt="Jane" style="width:100%">
                        </div>
                    </div>
                    <div>
                        <div id="foto6" class="card">
                            <img src="./imagenes/celulares/Celular-Huawei.png" alt="Jane" style="width:100%">
                        </div>
                    </div>
                     <div>
                        <div id="foto7" class="card">
                            <img src="./imagenes/celulares/Celular-Lg.png" alt="Jane" style="width:100%">
                        </div>
                    </div>
                    <div>
                        <div id="foto8" class="card">
                            <img src="./imagenes/celulares/Celular-Motorola.png" alt="Jane" style="width:100%">
                        </div>
                    </div>
                    
                    

               
                    
                </div>
                    <br>
                    <div id="e1">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">NOKIA</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" required value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" required value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" required value="Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" required value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" required value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" required value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" required name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio"required value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" required value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" required value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" required value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" required value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" required value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="850.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    <br>
                    <div id="e2">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">Apple</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" value=" Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio" value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="700.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    <br>
                    <div id="e3">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">SAMSUNG</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" value=" Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio" value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="850.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    <br>
                    <div id="e4">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">LANIX</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" value=" Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio" value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="850.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    <br>
                    <div id="e5">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">ALCATEL</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" value=" Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio" value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="650.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    <br>
                    <div id="e6">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">HAWEI</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" value=" Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio" value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="850.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    <br>
                    <div id="e7">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">LG</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" value=" Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio" value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="1.550.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    <br>
                    <div id="e8">
                        <!-- <h2>Jane Doe</h2> -->
                        <hr style="width:34%">
                        <h1 class="title-price">MOTOROLA</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">Todos a la medida de tus necesidades</p>
                        <span class="title">
                            <table>
                                <tr>
                                    <th>Tamaño</th>
                                    <th>Monitor</th>
                                    <th>Procesador</th>
                                    
                                </tr>
                                <tr>
                                    <td>5.84 "y pesa 145 gramos.</td>
                                    <td>5.84 "</td>
                                    <td><input type="text" name="Nombre_celular" hidden value="NOKIA Kirin 659">NOKIA Kirin 659</td>
                                    

                                </tr>
                                <tr>

                                    <th>Sistema operativo</th>
                                    <th>Memoria. Interno</th>
                                    <th>Camara</th>
                                </tr>
                                <tr>

                                    <td>
                                        <div>
                                        <input type="radio" value="Android 8.0, EMUI 8.0." name="operativoopcion"> Android 8.0, EMUI 8.0.<br>
                                        <input type="radio" value="Android 7.1, EMUI 8.0." name="operativoopcion"> Android 7.1, EMUI 8.0.<br>
                                        <input type="radio" value=" Android 7.0, EMUI 8.0." name="operativoopcion"> Android 7.0, EMUI 8.0.<br>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                        <input type="radio" value="16 GB de RAM, 64 GB de Flash." name="ramopcion"> 16 GB de RAM, 64 GB de Flash. <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.8% en el valor de la compra</span><br>
                                        <input type="radio" value="8 GB de RAM, 32 GB de Flash." name="ramopcion"> 8 GB de RAM, 32 GB de Flash.<br>
                                        <input type="radio" value="4 GB de RAM, 32 GB de Flash." name="ramopcion"> 4 GB de RAM, 32 GB de Flash. <br>
                                        </div>
                                    </td>
                                    <td><input type="text" name="camara_celular" hidden value="Trasera: 16MP f2.2 frontal: 2MP f2.4">
                                        Trasera:
                                        16MP f2.2 <br>
                                        frontal:
                                        2MP f2.4.</td>
                                    </tr>
                                    <tr>
                                    <th>Redes - sociales</th>
                                    <th>Datos Moviles</th>
                                    <th>Total:</th>
                                    </tr>
                                    <tr>
                                    <td >
                                        <div>
                                        <input type="radio" value="Whatsapp + facebook + instagram" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"> + </i> <i class="fa fa-instagram fa-3x"> </i><br><br> 
                                        <input type="radio" value="Whatsapp + facebook" name="redessociales"><i class="fa fa-whatsapp fa-3x"> + </i>  <i class="fa fa-facebook-f fa-3x"></i><br><br>
                                        <input type="radio" value="Whatsapp" name="redessociales"><i class="fa fa-whatsapp fa-3x"></i><br><br>
                                        <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.9% en el valor de la compra</span>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        <input type="radio" value="2 GB" name="datosmovilesopcion"> 2 GB<br><br> 
                                        <input type="radio" value="4 GB" name="datosmovilesopcion"> 4 GB <span style="font-size: 12px;background-color: red;color:white;">Descuento: 0.2% en el valor de la compra</span><br><br>
                                        <input type="radio" value="6 GB" name="datosmovilesopcion"> 6 GB<br><br>      
                                        </div>
                                    </td>
                                    <td >
                                        <div>
                                        $<input type="text" id="precio" style="border:none;width: 120px;background-color: #f2f2f2;font-weight: bold;font-size: 24px;" readonly value="650.000" name="precio"> <b>Cop</b>
                                        </div>
                                    </td>
                                    </tr>
                            </table>
                        </span>
                    </div>
                    
            </div>
            <input  style="width:600px;margin:0px 27%" type="submit" value="Enviar">
            <br>
            <br>
            <hr style="margin:0px 26%;width:48%">
            <br>
            
           
        </form>
        </fieldset>
    </div>
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
    <script src="js/app.js"></script>
</body>


</html>