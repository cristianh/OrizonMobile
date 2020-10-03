<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css" />
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script>
    function onGuardarFormpersona(id) {
        ocultarbotonesPersona();
        addstyleslistPersona();
        setInputAttributesPersona();
        ocultarCiudadComboPersona();
        mostrarInputCiudadPersona();

        var data = {
            "id": id,
            "nombre": document.getElementById('lpersonanombre').value,
            "apellido": document.getElementById('lpersonapellido').value,
            "cedula": document.getElementById('lcedulapersona').value,
            "telefono": document.getElementById('ltelefonopersona').value,
            "ciudad": document.getElementById('lciudadupdatepersona')[document.getElementById(
                'lciudadupdatepersona').selectedIndex].value,
            "correo": document.getElementById('lcorreopersona').value
        };

        $.ajax({
            url: 'dbphp/actualizar_persona.php',
            type: 'POST',
            data: data,
            success: function(response) {
                console.log(response);
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.success('Usuario actualizado');


            },
            error: function(request, status, error) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error(error);
            }
        });
    }



    function onEliminarFormPersona(id) {

        var data = {
            "id": id
        };
        $.ajax({
            url: 'dbphp/eliminar_persona.php',
            type: 'POST',
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error('Usuario eliminado');
                document.getElementById('container-form').style.display = 'none';
            },
            error: function(request, status, error) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error(error);
            }
        });
    }


    function onCancelarFormpersona() {
        ocultarbotonesPersona();
        setInputAttributesPersona();
        addstyleslistPersona();
        ocultarCiudadComboPersona();
        mostrarInputCiudadPersona();
    }

    function onEditarFormpersona() {
        //Cambiamos la vista de los  inputs de persona
        mostrarbotonesPersona();
        removestyleslistPersona();
        removeAttributesPersona();
        mostrarCiudadComboPersona();
        ocultarInputCiudadPersona();
    }


    function cambiarItemCiudadPersona() {
        document.getElementById('lciudadpersona').value = document.getElementById('lciudadupdatepersona')[document
            .getElementById('lciudadupdatepersona').selectedIndex].text;
    }





    /******************************************
     * Funciones auxiliares Persona
     * ****************************************/
    function ocultarbotonesPersona() {
        document.getElementById('btneditarpersona').style.display = 'block';
        document.getElementById('btncancelarpersona').style.display = 'none';
        document.getElementById('btnguardarpersona').style.display = 'none';
        document.getElementById('btneliminarpersona').style.display = 'none';
    }

    function mostrarbotonesPersona() {
        document.getElementById('btneditarpersona').style.display = 'none';
        document.getElementById('btncancelarpersona').style.display = 'block';
        document.getElementById('btnguardarpersona').style.display = 'block';
        document.getElementById('btneliminarpersona').style.display = 'block';
    }

    function addstyleslistPersona() {
        document.getElementById('form_persona').classList.add("forminline");
    }



    function removestyleslistPersona() {
        document.getElementById('form_persona').classList.remove("forminline");
    }



    function setInputAttributesPersona() {
        document.getElementById('lcedulapersona').setAttribute('style', 'width: 36% !important;');
        document.getElementById('lcorreopersona').setAttribute('style', 'width: 25% !important;');
    }



    function removeAttributesPersona() {
        document.getElementById('lcorreopersona').removeAttribute('style');
        document.getElementById('lcedulapersona').removeAttribute('style');
    }


    function ocultarCiudadComboPersona() {
        document.getElementById('Ciudad_persona').style.display = 'none';
    }

    function mostrarCiudadComboPersona() {
        document.getElementById('Ciudad_persona').style.display = 'block';
    }

    function mostrarInputCiudadPersona() {
        document.getElementById('lciudadpersona').style.display = 'inline';
    }

    function ocultarInputCiudadPersona() {
        document.getElementById('lciudadpersona').style.display = 'none';
    }


    /******************************************
     * Fin  funciones auxiliares Persona
     * ****************************************/

    /******************************************
     * Plan
     * ****************************************/


    /**
     * Funcion para actulizar plan.
     */
    function onGuardarFormplan(id) {

        ocultarbotonesPlan();
        addstyleslistPlan();
        ocultarInputElementosPlan();
        setInputAttributesPlan();
        ocultarComboPlan();
        mostrarInputElementosPlan();



        var data = {
            "idplan": id,
            "planseleccionado": document.getElementById('selectitemplan').selectedIndex
        };



        $.ajax({
            url: 'dbphp/actualizar_plan.php',
            type: 'POST',
            data: data,
            success: function(response) {
                console.log(response);
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.success('Plan actualizado');


            },
            error: function(request, status, error) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error(error);
            }
        });
    }


    function actualizarPlanCombo() {
        var id = document.getElementById('selectitemplan').selectedIndex;

        var data = {
            "id": id
        };
        document.getElementById('lnombreplan').value = String(document.getElementById('selectitemplan')[document
            .getElementById('selectitemplan').selectedIndex].text).replace("Plan", "");
        if (id > 0) {
            $.ajax({
                url: 'dbphp/seleccionar_plan.php',
                type: 'GET',
                data: data,
                success: function(response) {
                    var elements = JSON.parse(response);
                    console.log(elements[0]['Id_plan']);
                    document.getElementById('lprecioplan').value = elements[0]['precio_plan'];
                    document.getElementById('lalmacenamientoplan').value = elements[0]['almacenamiento'];
                    document.getElementById('lvelocidadplan').value = elements[0]['velocidad'];
                    document.getElementById('ldominiosplan').value = elements[0]['dominios'];
                    document.getElementById('ldescuentoplan').value = elements[0]['descuento'];

                },
                error: function(request, status, error) {
                    alertify.set('notifier', 'position', 'bottom-center');
                    alertify.error(error);
                }
            });
        }

    }

    function onEliminarFormPlan(id) {

        var data = {
            "id_persona": id
        };
        $.ajax({
            url: 'dbphp/eliminar_plan.php',
            type: 'POST',
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error('Plan eliminado');

                onCancelarFormplan();
                document.getElementById('plan_celular_mensaje').style.display = 'block';
                document.getElementById('form_plan').style.display = 'none';
            },
            error: function(request, status, error) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error(error);
            }
        });
    }


    function onEditarFormplan() {
        //Cambiamos la vista de los  inputs de persona
        mostrarbotonesPlan();
        removeAttributesPlan();
        removestyleslistPlan();
        ocultarInputElementosPlan();
        mostrarComboPlan();
    }

    function onCancelarFormplan() {
        ocultarbotonesPlan();
        addstyleslistPlan();
        //ocultarInputElementosPlan();
        mostrarInputElementosPlan();
        setInputAttributesPlan();
        ocultarComboPlan();
    }


    /******************************************
     * Funciones auxiliares Plan
     * ****************************************/

    function ocultarbotonesPlan() {
        document.getElementById('btneditarplan').style.display = 'block';
        document.getElementById('btncancelarplan').style.display = 'none';
        document.getElementById('btnguardarplan').style.display = 'none';
        document.getElementById('btneliminarplan').style.display = 'none';
    }

    function mostrarbotonesPlan() {
        document.getElementById('btneditarplan').style.display = 'none';
        document.getElementById('btncancelarplan').style.display = 'block';
        document.getElementById('btnguardarplan').style.display = 'block';
        document.getElementById('btneliminarplan').style.display = 'block';
    }

    function ocultarInputElementosPlan() {
        document.getElementById('input_nombre_plan').style.display = 'none';
    }

    function mostrarInputElementosPlan() {
        document.getElementById('input_nombre_plan').style.display = 'inline';
    }

    function ocultarComboPlan() {
        document.getElementById('seleccion_plan').style.display = 'none';
        document.getElementById('combo_select_plan').style.display = 'none';
    }

    function mostrarComboPlan() {
        document.getElementById('seleccion_plan').style.display = 'block';
        document.getElementById('combo_select_plan').style.display = 'block';
    }

    function setInputAttributesPlan() {
        document.getElementById('lalmacenamientoplan').setAttribute('style', 'width: 29% !important;');
    }

    function removeAttributesPlan() {
        document.getElementById('lalmacenamientoplan').removeAttribute('style');
    }



    function addstyleslistPlan() {
        document.getElementById('form_plan').classList.add("forminline");
    }

    function removestyleslistPlan() {
        document.getElementById('form_plan').classList.remove("forminline");
    }
    /******************************************
     * Fin funciones auxiliares plan
     * ****************************************/



    /******************************************
     * Ventas celular
     * ****************************************/


    /**
     * Funcion para actulizar ventas celular.
     */
    function onGuardarFormventacelular(id) {
        ocultarbotonesVentacelular();
        addstyleslistVentacelular();
        ocultarInputElementosVentacelular;
        setInputAttributesVentacelular();
        ocultarComboVentacelular();
        mostrarInputElementosVentacelular();

        var data = {
            "Id_celular": id,
            "nom_celular": document.getElementById('lnombreventascelular').value,
            "datos_celular": document.getElementById('lalmacenamientoventascelular').value,
            "memoria_celular": document.getElementById('lmemoriacelular').value,
            "Sistemaop_celular": document.getElementById('lsisopcelular').value,
            "Procesador_celular": document.getElementById('lprocesadorventascelular').value,
            "Precio_celular": document.getElementById('lprecioventascelular').value,
            "Descuento_celular": document.getElementById('ldescuentocelular').value
        };
        console.log(data);

        $.ajax({
            url: 'dbphp/actualizar_ventascelular.php',
            type: 'POST',
            data: data,
            success: function(response) {
                console.log(response);
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.success('Celular venta actualizado');


            },
            error: function(request, status, error) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error(error);
            }
        });
    }




    function onEliminarFormventacelular(id) {

        var data = {
            "id_ventas": id
        };
        $.ajax({
            url: 'dbphp/eliminar_ventacelular.php',
            type: 'POST',
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error('Venta celular eliminado');
                //document.getElementById('contenedor').style.display='none';
                //onCancelarFormventacelular();


                document.getElementById('venta_celular_mensaje').style.display = 'block';
                document.getElementById('form_ventacelular').style.display = 'none';

            },
            error: function(request, status, error) {
                alertify.set('notifier', 'position', 'bottom-center');
                alertify.error(error);
            }
        });
    }


    function onEditarFormventacelular() {
        //Cambiamos la vista de los  inputs de persona
        mostrarbotonesVentacelular();
        removeAttributesVentacelular();
        removestyleslistVentacelular();
        ocultarInputElementosVentacelular();
        mostrarComboVentacelular();

    }

    function onCancelarFormventacelular() {
        ocultarbotonesVentacelular();
        addstyleslistVentacelular();
        mostrarInputElementosVentacelular();
        setInputAttributesVentacelular();
        ocultarComboVentacelular();
    }


    /******************************************
     * Funciones auxiliares ventas celular
     * ****************************************/

    function ocultarbotonesVentacelular() {
        document.getElementById('btneditarventacelular').style.display = 'block';
        document.getElementById('btncancelarventacelular').style.display = 'none';
        document.getElementById('btnguardarventacelular').style.display = 'none';
        document.getElementById('btneliminarventacelular').style.display = 'none';
    }

    function mostrarbotonesVentacelular() {
        document.getElementById('btneditarventacelular').style.display = 'none';
        document.getElementById('btncancelarventacelular').style.display = 'block';
        document.getElementById('btnguardarventacelular').style.display = 'block';
        document.getElementById('btneliminarventacelular').style.display = 'block';
    }

    function ocultarInputElementosVentacelular() {
        document.getElementById('lnombreventascelular').style.display = 'none';
        document.getElementById('lsisopcelular').style.display = 'none';
        document.getElementById('lmemoriacelular').style.display = 'none';
        document.getElementById('lalmacenamientoventascelular').style.display = 'none';
    }

    function mostrarInputElementosVentacelular() {
        document.getElementById('lnombreventascelular').style.display = 'inline';
        document.getElementById('lsisopcelular').style.display = 'inline';
        document.getElementById('lmemoriacelular').style.display = 'inline';
        document.getElementById('lalmacenamientoventascelular').style.display = 'inline';


    }

    function ocultarComboVentacelular() {
        document.getElementById('combosisop_select_celular').style.display = 'none';
        document.getElementById('combonombre_select_celular').style.display = 'none';
        document.getElementById('comboalmacenamiento_select_celular').style.display = 'none';
        document.getElementById('combomemoria_select_celular').style.display = 'none';
    }

    function mostrarComboVentacelular() {

        document.getElementById('comboselect').style.display = 'inline';
        document.getElementById('combosisop_select_celular').style.display = 'inline';
        document.getElementById('combonombre_select_celular').style.display = 'inline';
        document.getElementById('comboalmacenamiento_select_celular').style.display = 'inline';
        document.getElementById('combomemoria_select_celular').style.display = 'inline';
    }


    function setInputAttributesVentacelular() {
        document.getElementById('lnombreventascelular').setAttribute('style', 'width: 20% !important;');
        document.getElementById('lprocesadorventascelular').setAttribute('style', 'width: 16% !important;');
        document.getElementById('lprecioventascelular').setAttribute('style', 'width: 20% !important;');
        document.getElementById('lalmacenamientoventascelular').setAttribute('style', 'width: 20% !important;');
        document.getElementById('lsisopcelular').setAttribute('style', 'width: 25% !important;');

    }

    function removeAttributesVentacelular() {
        document.getElementById('lnombreventascelular').removeAttribute('style');
        document.getElementById('lprocesadorventascelular').removeAttribute('style');
        document.getElementById('lprecioventascelular').removeAttribute('style');
        document.getElementById('lalmacenamientoventascelular').removeAttribute('style');
        document.getElementById('lsisopcelular').removeAttribute('style');



    }



    function addstyleslistVentacelular() {
        document.getElementById('form_ventacelular').classList.add("forminline");
    }

    function removestyleslistVentacelular() {
        document.getElementById('form_ventacelular').classList.remove("forminline");
    }

    function actualizarCelularCombo() {
        var id = document.getElementById('selectitemnombrecelular').selectedIndex;

        var data = {
            "id": id
        };
        document.getElementById('lnombreventascelular').value = String(document.getElementById(
                'selectitemnombrecelular')[document.getElementById('selectitemnombrecelular').selectedIndex].text)
            .replace("Plan", "");

    }

    function actualizaralmacenamientocelularCombo() {
        var id = document.getElementById('selectitemalmacenamiento').selectedIndex;

        var data = {
            "id": id
        };
        document.getElementById('lalmacenamientoventascelular').value = String(document.getElementById(
                'selectitemalmacenamiento')[document.getElementById('selectitemalmacenamiento').selectedIndex].text)
            .replace("Plan", "");

    }

    function actualizarmemoricelularCombo() {
        var id = document.getElementById('selectitemmemoria').selectedIndex;

        var data = {
            "id": id
        };
        document.getElementById('lmemoriacelular').value = String(document.getElementById('selectitemmemoria')[document
            .getElementById('selectitemmemoria').selectedIndex].text).replace("Plan", "");

    }

    function actualizarsistemaopcelularCombo() {
        var id = document.getElementById('selectitemsisop').selectedIndex;

        var data = {
            "id": id
        };
        document.getElementById('lsisopcelular').value = String(document.getElementById('selectitemsisop')[document
            .getElementById('selectitemsisop').selectedIndex].text).replace("Plan", "");

    }
    /******************************************
     * Fin funciones auxiliares ventas celular
     * ****************************************/
    </script>
    <style>
    #Ciudad_persona {
        display: none;
    }

    #btncancelarpersona,
    #btneliminarpersona,
    #btnguardarpersona,
    #btncancelarplan,
    #btneliminarplan,
    #btnguardarplan,
    #btncancelarventacelular,
    #btneliminarventacelular,
    #btnguardarventacelular {
        display: none;
    }

    #plan_seleccion {
        display: none;
    }

    #seleccion_plan {
        display: none;
    }

    #comboselect {
        display: none;
    }

    #celular_nombre {
        display: inline;
    }

    #input_nombre_plan,
    #input_nombre {
        display: inline;
    }

    #venta_celular_mensaje,
    #plan_celular_mensaje {
        display: none;
    }

    #combosisop_select_celular,
    #combonombre_select_celular,
    #comboalmacenamiento_select_celular,
    #combomemoria_select_celular {
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
        <li>Comprar</li>
    </ul>
    <section>

        <div class="container-imagen">
            <div class="hero-imagen11">
                <div class="hero-text-left">
                    <span>Consultar Usuario</span>

                    <!-- <button>Mas información</button> -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-form ">
            <div class="row-form">
                <div class="column-tow-cotizar">
                    <div class="column-consulta_page">
                        <div class="container-cotizacion">
                            <form class="form_descuento" style="display:block" action="consultar.php" method="post">
                                <fieldset style="
    border-radius: 12px;
    text-align: center;
">
                                    <span><b>CEDULA:</b></span>
                                    <input type="text" required name="Cedula" placeholder="Buscar...">
                                    <input type="submit" value="Buscar">';
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
    </section>

    <?php
if(isset($_POST['Cedula'])){
    //Invocamos la base de datos.
$d=include('dbphp/conexiondb.php');


            //Variables de la persona.
            $cedula = $_POST['Cedula'];
            $idpersona;
           
           //Buscamos la informacion de la persona.
           $consulta_query1 = "SELECT per.Id_Persona,
                                per.Nomb_persona,
                                per.Apell_persona,
                                per.Cedula_persona,
                                per.Telefono_persona,
                                cd.IdCiudad,
                                cd.Nombre as Ciudad_persona,
                                per.Correo_persona 
                                FROM personas per 
                                JOIN ciudades cd 
                                ON per.Ciudad_persona = cd.IdCiudad
                                where per.Cedula_persona  = ".$cedula . ";";
            //ejecutamos la consulta.
           $resultado1 = mysqli_query( $d, $consulta_query1) or die ( "Error en la consulta".mysqli_error($d));

         
            //Si la consulta retorna una fila.
           if($num_rows = mysqli_num_rows($resultado1)>0){
                $select;
                $select_plan;
                // Recorremos los resultados para mostrar las opciones.
                while($row = $resultado1->fetch_assoc()) {
                $eleccion = $row ['IdCiudad'];
                $idpersona = $row ['Id_Persona'];
                //Eleccion
                if($eleccion==1){
                    $select = '<div id="Ciudad_persona">
                                             <select onchange="cambiarItemCiudadPersona()" id="lciudadupdatepersona" name="lCiudadUpdate">
                                                <option> Seleccione</option>
                                                <option selected value="1">Colombia</option>
                                                <option value="2">Peru</option>
                                                <option value="3">Chile</option>
                                            </select>
                                            </div>';
                }
                else if($eleccion==2){
                   $select = '<div id="Ciudad_persona">
                                             <select onchange="cambiarItemCiudadPersona()" id="lciudadupdatepersona" name="lCiudadUpdate">
                                                <option> Seleccione</option>
                                                <option value="1">Colombia</option>
                                                <option selected value="2">Peru</option>
                                                <option value="3">Chile</option>
                                            </select>
                                            </div>'; 
                }
                else{
                     $select = '<div id="Ciudad_persona">
                                             <select onchange="cambiarItemCiudadPersona()" id="lciudadupdatepersona" name="lCiudadUpdate">
                                                <option> Seleccione</option>
                                                <option value="1">Colombia</option>
                                                <option value="2">Peru</option>
                                                <option selected value="3">Chile</option>
                                            </select>
                                            </div>'; 
                }
                //Mostramos el resultado de la consulta.
                    echo '<div id="contenedor" >
                        <hr style="width:34%">
                        <h1 class="title-price">Resultado</h1>
                        <hr style="width:34%">
                        <p style="text-align:center">';
                
                    echo '<div id="container-form" class="container-form ">
                            <div class="row-form">
                             <div class="column-tow-cotizar">
                                <div class="column-consulta_page">
                                     <div id="form_persona" class="forminline">
                                            <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                             <legend><b>Persona:</b></legend>
                                             <br>
                                            <label for="lpersonanombre"><b>Nombre:</b></label>
                                            <input type="text" id="lpersonanombre"  value='.$row['Nomb_persona'].'  name="lpersonanombre" placeholder="Su nombre..">

                                            <label for="lpersonapellido"><b>Apellido:</b></label>
                                            <input type="text" id="lpersonapellido" value='.$row['Apell_persona'].' name="lpersonapellido" placeholder="Su apellido..">

                                            <label for="lcedulapersona"><b>Cedula o Nit:</b></label>
                                            <input type="text" id="lcedulapersona" style="width: 13% !important;" value='.$row['Cedula_persona'].' name="lcedulapersona" placeholder="Su cedular o nit..">
                                            
                                            <label for="ltelefonopersona"><b>Telefono:</b></label>
                                            <input type="text" id="ltelefonopersona"  value='.$row['Telefono_persona'].' name="ltelefonopersona" placeholder="Su telefono..">

                                            <label for="lcorreopersona"><b>Correo:</b></label>
                                            <input type="text" style="width: 25% !important;" id="lcorreopersona" value='.$row['Correo_persona'].' name="lcorreopersona" placeholder="Su correo..">

                                            <label for="lciudadpersona"><b>Ciudad:</b></label>
                                            <input type="text" id="lciudadpersona" value='.$row['Ciudad_persona'].' name="lciudadpersona" placeholder="Su correo..">'. 
                                             $select.'<br>
                                             <br>
                                              <button id="btneditarpersona" class="button" onclick="onEditarFormpersona()">EDITAR</button>
                                                <button id="btnguardarpersona" class="button-save" onclick="onGuardarFormpersona('.$idpersona.')">GUARDAR</button>
                                                <button id="btneliminarpersona" class="button-delete" onclick="onEliminarFormPersona('.$idpersona.')">ELIMINAR</button>
                                                <button id="btncancelarpersona" class="button-cancelar" onclick="onCancelarFormpersona()">CANCELAR</button>
                                            </fieldset>
                                       
                                            </div>
                                        </div>
                                     </div>
                               </div>
                            </div>';
                }
           }
           else{
               //En caso contrario notificamos que no se encuentra la infomracion.
               echo '<div id="container-form" class="container-form ">
                            <div class="row-form">
                             <div class="column-tow-cotizar">
                                <div class="column-consulta_page">
                                     <div  class="forminline">
                                            <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                             <legend><b>Persona:</b></legend>
                                             No se encuentra una persona con esa Cedula.
                                            </fieldset>
                                           
                                            </div>
                                        </div>
                                     </div>
                               </div>
                            </div>';
           }

            //Buscamos los descuentos del usuario buscado por cedula.
          $consulta_query2 = "SELECT plan.Id_plan,plan.nomb_plan,plan.precio_plan,plan.almacenamiento,plan.velocidad,plan.dominios,plan.descuento,des.Id_Persona FROM planes plan 
                             JOIN descuentos des ON plan.Id_plan = des.Id_plan
                             JOIN personas per ON per.Id_Persona = des.Id_Persona
                             WHERE per.Cedula_Persona='".$cedula."';";
          $resultado2 = mysqli_query( $d, $consulta_query2) or die ( "Error en la consulta".mysqli_error($d));
        // recorremos todos los resultados.
          if($num_rows = mysqli_num_rows($resultado2)>0){
                $select_plan;
                while($row = $resultado2->fetch_assoc()) {
                $eleccion_plan = $row ['Id_plan'];
                //Mostramos el combo del plan dependiento de la buscqueda.
                 if($eleccion_plan==1){
                    $select_plan = '<div id="combo_select_plan">
                                             <select onchange="actualizarPlanCombo()" id="selectitemplan" name="plan_select">
                                                <option> Seleccione</option>
                                                <option selected value="1">Plan Basico</option>
                                                <option value="2">Plan Familiar</option>
                                                <option value="3">Plan Premium</option>
                                            </select>
                                </div>'; 
                }
                else if($eleccion_plan==2){
                   $select_plan = '<div id="combo_select_plan">
                                             <select onchange="actualizarPlanCombo()" id="selectitemplan" name="plan_select">
                                                <option> Seleccione</option>
                                                <option value="1">Plan Basico</option>
                                                <option selected value="2">Plan Familiar</option>
                                                <option value="3">Plan Premium</option>
                                            </select>
                                </div>'; 
                }
                else{
                     $select_plan = '<div id="combo_select_plan">
                                             <select onchange="actualizarPlanCombo()" id="selectitemplan" name="plan_select">
                                                <option> Seleccione</option>
                                                <option value="1">Plan Basico</option>
                                                <option value="2">Plan Familiar</option>
                                                <option selected value="3">Plan Premium</option>
                                            </select>
                                </div>'; 
                }
                
               //Mostramos la informacion del plan que tiene la persona.
                echo '<div id="container-form" class="container-form ">
                    <div class="row-form">
                        <div class="column-tow-cotizar">
                            <div class="column-consulta_page">
                                <div id="form_plan" class="forminline" >
                                        <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                            <legend><b>Plan Internet:</b></legend>
                                            <div id="input_nombre_plan">
                                            <label for="lnombreplan"><b>Nombre:</b></label>
                                            <input type="text" id="lnombreplan" readonly  value='.$row['nomb_plan'].' readonly name="lnombreplan">
                                            </div>
                                            <div id="seleccion_plan">
                                                <br>
                                                <label for="lpan"><b>Seleccionar plan:</b></label>'
                                                .$select_plan.
                                                '<br>
                                            </div>
                                            <label for="lprecioplan"><b>Precio:</b></label>
                                            <input type="text" id="lprecioplan"  readonly  value='.$row['precio_plan'].' name="lprecioplan">
                                            
                                            <label for="lalmacenamientoplan"><b>Almacenamiento:</b></label>
                                            <input type="text" id="lalmacenamientoplan" readonly  style="width: 29% !important;"   value='.$row['almacenamiento'].' name="lalmacenamientoplan">

                                            <label for="lvelocidadplan"><b>Velocidad:</b></label>
                                            <input type="number" id="lvelocidadplan" readonly   value='.$row['velocidad'].' name="lvelocidadplan">

                                            <label for="ldominiosplan"><b>Dominios:</b></label>
                                            <input type="number" id="ldominiosplan"  readonly value='.$row['dominios'].' name="ldominiosplan" placeholder="Su correo..">

                                            <label for="ldescuentoplan"><b>Descuento plan:</b></label>
                                            <input type="text" id="ldescuentoplan"  readonly  value='.$row['descuento'].' name="ldescuentoplan" placeholder="Su correo..">
                                            <br>
                                            <br>
                                                <button id="btneditarplan" class="button" onclick="onEditarFormplan()">EDITAR</button>
                                                <button id="btnguardarplan" class="button-save" onclick="onGuardarFormplan('.$row['Id_Persona'].')">GUARDAR</button>
                                                <button id="btneliminarplan" class="button-delete" onclick="onEliminarFormPlan('.$row['Id_Persona'].')">ELIMINAR</button>
                                                <button id="btncancelarplan" class="button-cancelar" onclick="onCancelarFormplan()">CANCELAR</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="container-form" class="container-form ">
                            <div class="row-form">
                             <div class="column-tow-cotizar">
                                <div class="column-consulta_page">
                                     <div  id="plan_celular_mensaje">
                                            <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                             <legend><b>Plan Internet:</b></legend>
                                                La persona no cuenta con un plan de internet.
                                            </fieldset>
                                           
                                            </div>
                                        </div>
                                     </div>
                               </div>
                            </div>';
                }
            }
            else
            {
                // Si la consulta no arroja resultados informamos que no tiene plan.
            echo '<div id="container-form" class="container-form ">
                            <div class="row-form">
                             <div class="column-tow-cotizar">
                                <div class="column-consulta_page">
                                     <div  id="plan_celular_mensaje" class="forminline">
                                            <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                             <legend><b>Plan Internet:</b></legend>
                                                La persona no cuenta con un plan de internet.
                                            </fieldset>
                                           
                                            </div>
                                        </div>
                                     </div>
                               </div>
                            </div>';   
            }

             //Buscamos el celular del usuario.
          $consulta_query3 = "SELECT Id_Celular,Id_Persona,Nom_celular,datos_celular,Memoria_celular,Sistemaop_celular,Procesador_celular,Precio_celular,Descuento_celular FROM ventas_celular ventas where ventas.Id_Persona = (SELECT Id_persona FROM personas per where per.Cedula_persona  = ".$cedula . ");";
          $resultado3 = mysqli_query( $d, $consulta_query3) or die ( "Error en la consulta");

            

            $combonombrecelular = '<div id="combonombre_select_celular">
                                             <select onchange="actualizarCelularCombo()" id="selectitemnombrecelular" name="ventacelular_select_nombre">
                                                <option> Seleccione</option>
                                                <option value="Nokia">Nokia</option>
                                                <option value="Motorola">Motorola</option>
                                                <option value="Samsung">Samsung</option>
                                            </select>
                                </div>'; 
             $comboalmacenamientocelular = '<div id="comboalmacenamiento_select_celular">
                                             <select onchange="actualizaralmacenamientocelularCombo()" id="selectitemalmacenamiento" name="ventacelular_select_almacenamiento">
                                                <option> Seleccione</option>
                                                <option value="2 GB">2 GB </option>
                                                <option value="4 GB">4 GB </option>
                                                <option value="6 GB">6 GB </option>
                                            </select>
                                </div>'; 
            $combomemoriacelular = '<div id="combomemoria_select_celular">
                                             <select onchange="actualizarmemoricelularCombo()" id="selectitemmemoria" name="ventacelular_select_memoria">
                                                <option> Seleccione</option>
                                                <option value="2 GB de RAM, 32 GB de Flash.">2 GB de RAM, 32 GB de Flash.</option>
                                                <option value="4 GB de RAM, 32 GB de Flash.">4 GB de RAM, 32 GB de Flash.</option>
                                                <option value="6 GB de RAM, 32 GB de Flash.">6 GB de RAM, 32 GB de Flash.</option>
                                            </select>
                                </div>'; 
             $combosistemaoperativocelular = '<div id="combosisop_select_celular">
                                             <select onchange="actualizarsistemaopcelularCombo()" id="selectitemsisop" name="ventacelular_select_sisop">
                                                <option> Seleccione</option>
                                                <option value="Android 8.0, EMUI 8.0.">Android 8.0, EMUI 8.0.</option>
                                                <option value="Android 7.1, EMUI 7.0.">Android 7.1, EMUI 7.0.</option>
                                                <option value="Android 7.0, EMUI 6.9.">Android 7.0, EMUI 6.9.</option>
                                            </select>
                                </div>'; 
     
                //Si encontramos un resultado.
              if($num_rows = mysqli_num_rows($resultado3)>0){
                //Recorremos todo el resultado mostrando la informacion.
                while($row = $resultado3->fetch_assoc()) {
                    $memoria=$row['Memoria_celular'];
                
                echo '<div id="container-form" class="container-form ">
                    <div class="row-form">
                        <div class="column-tow-cotizar">
                            <div class="column-consulta_page">
                                <div id="form_ventacelular" class="forminline" >
                                            <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                            <legend><b>Plan Celular:</b></legend>
                                            <div id="celular_nombre">
                                            <label for="lnombreventascelular"><b>Celular:</b></label>
                                            <input type="text" id="lnombreventascelular" readonly style="width: 20% !important;"  value="'.$row['Nom_celular'].'" readonly name="lnombreventascelular">
                                            </div>
                                            <div id="comboselect">'
                                            .$combonombrecelular.'
                                            </div>
                                            
                                            <label for="lprocesadorventascelular"><b>Procesardor celular:</b></label>
                                            <input type="text" id="lprocesadorventascelular"  style="width: 16% !important;" readonly  value="'.$row['Procesador_celular'].'" name="lprocesadorventascelular">
                                            
                                            <label for="lprecioventascelular"><b>Precio celular:</b></label>
                                            <input type="text" id="lprecioventascelular" style="width: 20% !important;"  readonly  value="'.$row['Precio_celular'].'" name="lprecioventascelular">
                                            
                                            <label for="lalmacenamientoventascelular"><b>Almacenamiento celular:</b></label>
                                            <input type="text" id="lalmacenamientoventascelular" readonly  style="width: 20% !important;"   value="'.$row['datos_celular'].'" name="lalmacenamientoventascelular">
                                            '.$comboalmacenamientocelular.'
                                            <label for="lmemoriacelular"><b>Memoria celular:</b></label>
                                            <input type="text" id="lmemoriacelular"  style="width: 39% !important;"  value="'.$memoria.'" name="lmemoriacelular">
                                            '.$combomemoriacelular.'
                                            <label for="lsisopcelular"><b>Sistema operativo:</b></label>
                                            <input type="text" id="lsisopcelular"  style="width: 25% !important;" readonly value="'.$row['Sistemaop_celular'].'" name="lsisopcelular" >
                                               '.$combosistemaoperativocelular.' 
                                            <label for="ldescuentocelular"><b>Descuento plan:</b></label>
                                            <input type="text" id="ldescuentocelular"  readonly  value='.$row['Descuento_celular'].' name="ldescuentocelular" placeholder="Su correo..">
                                            <br>
                                            <br>
                                            <button id="btneditarventacelular" class="button" onclick="onEditarFormventacelular()">EDITAR</button>
                                                <button id="btnguardarventacelular" class="button-save" onclick="onGuardarFormventacelular('.$row['Id_Celular'].')">GUARDAR</button>
                                                <button id="btneliminarventacelular" class="button-delete" onclick="onEliminarFormventacelular('.$row['Id_Celular'].')">ELIMINAR</button>
                                                <button id="btncancelarventacelular" class="button-cancelar" onclick="onCancelarFormventacelular()">CANCELAR</button>
                                            
                                            
                                            </fieldset>
                    </div>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div id="container-form" class="container-form ">
                            <div class="row-form">
                             <div class="column-tow-cotizar">
                                <div class="column-consulta_page">
                                     <div id="venta_celular_mensaje" class="forminline">
                                            <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                             <legend><b>Plan Celular:</b></legend>
                                                La persona no tienen plan celular.
                                            </fieldset>
                                           
                                            </div>
                                        </div>
                                     </div>
                               </div>
                            </div>';
                }
            }
            else
            {
                //Caso contrario informamos que no tiene equipo celular.
            echo '<div id="container-form" class="container-form ">
                            <div class="row-form">
                             <div class="column-tow-cotizar">
                                <div class="column-consulta_page">
                                     <div id="venta_celular_mensaje" class="forminline">
                                            <fieldset  style="background-color:white;border-radius: 12px;text-align: left;font-size:16px">
                                             <legend><b>Plan Celular:</b></legend>
                                                La persona no tienen plan celular.
                                            </fieldset>
                                           
                                            </div>
                                        </div>
                                     </div>
                               </div>
                            </div>';   
            }   

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
                            <input type="text" placeholder="Email address" name="mail">
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