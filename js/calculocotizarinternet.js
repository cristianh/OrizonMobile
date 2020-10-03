
/**
 * @description Variables Globales para realizar calculos pagina cotizar_internet.php <br>
 * {string} option <br>
 * {int} descuento_global<br>
 * {int} valor_real<br>
 * */

    var opcion = "";
    var descuento_global = 0;
    var valor_real = 0;

    /**
     * Funcion para ocultar el formulario principal al terminar de hacer la compra del plan.
     */
    function validar() {
        document.getElementById('form_descuento').style.display = 'none';
    }


    /**
     * @description Funcion que se encarga de actualizar el precio cuando se cambian los valores de velocidad y almacenamiento.
     * @param {event} event Capturamos el elemento que genera el evento y validamos con value si esta seleccionado "persona" o "empresa"
     * 
     */
    function cambiarprecio(event) {
        /* Si no se a seleccinado ninguna opcion se notifica que debe hacer 1*/ 
        if (opcion === "") {
            alert("Debe seleccionar un tipo de cliente");
        } else {
            
            // Tomamos los  values campos para realizar las operaciones respectivas.
            var preciooriginal = document.getElementById('preciooriginal').value;
            var precio = document.getElementById('precio');
            var alamcenamiento = Number(document.getElementById('almacenamiento').value);
            var velocidad = Number(document.getElementById('velocidad').value);
            
        
            //Validamos si el almacenamiento y la velocidad estan por encima de los valores por defecto.
            //Y realizamos los calculos.
            if (alamcenamiento > 10 || velocidad > 10) {
                if (descuento_global) {
                    //asignamos al campo precio el valor de la suma de almacenamiento, velocidad y el descuento calculado.
                    precio.value = (parseInt(valor_real) + parseInt(alamcenamiento) + parseInt(velocidad) + parseInt(descuento_global)) * 10;
                    
                } else {
                    //asignamos al campo precio el valor de la suma, para restaurarlo cuando los valores estan por defecto (10 y 10)
                    precio.value = parseInt(valor_real) + parseInt(alamcenamiento) + parseInt(velocidad);
                }

            } else if (alamcenamiento < 10 || velocidad < 10) {
                //De lo contrio restamos los valores para ir descontando y llegar al valor inicial.
                if (descuento_global) {
                    precio.value = (parseInt(valor_real) - parseInt(alamcenamiento) - parseInt(velocidad) - parseInt(
                        descuento_global)) * 10;
                } else {
                    precio.value = parseInt(valor_real) - parseInt(alamcenamiento) - parseInt(velocidad);
                }
            }

        }

    }


    /**
     * Funcion que se encarga de realizar el descuento cuando se selecciona un tipo de usuario.
     * @parmes {event} event Capturamos el evento del elemento y validamos si el value es "empresa" o "persona".
     */
    function activardescuento(e) {
        if (e.value === "") {
            //Notificamos que por favor seleccione un tipo de cliente (Persona o Empresa);
            alert("Debe seleccionar un tipo de cliente");
        } else {

            //Removemos el atributo readonly para poder modificar los valores de velocidad y almacenamiento.
            document.getElementById('almacenamiento').removeAttribute("readonly");
            document.getElementById('velocidad').removeAttribute("readonly");
            //Capturamos los values(valores) de los campos de textos.
            var descuento = document.getElementById('descuento');
            var descuentooriginal = document.getElementById('descuentooriginal').value;
            var precio = document.getElementById('precio');
            var preciooriginal = document.getElementById('preciooriginal').value;
            var alamcenamiento = document.getElementById('almacenamiento').value;
            var velocidad = document.getElementById('velocidad').value;

            
            //Cambiamos el display de  el campo 'row_descuento' a inlin-block para alinear a la tabla.
            document.getElementById('row_descuento').style.display = "inline-block";
        
            //Se ponen los valores por defecto en las variables para comenzar con los valores por defecto a hacer las operaciones.
            precio.value = preciooriginal;
            descuento.value = descuentooriginal;
            //Si se selecciona empresa.
            if (e.value == "empresa") {
                opcion = "empresa";
                // se realiza ajuste a el valor de descuento (se le resta 7)
                descuento.value = ((descuentooriginal - 7) / 100);
                precio.value = Math.floor(precio.value * descuento.value);
            } else {
                //Si se selecciona persona.
                opcion = "persona";
                 // se realiza ajuste a el valor de descuento (se le resta 2)
                descuento.value = ((descuentooriginal - 2) / 100);
                precio.value = Math.floor(precio.value * descuento.value);
            }
            //reasignamos los valores para mostrarlos en la tabla.
            valor_real = precio.value;
            preciooriginal.value = valor_real;
            descuento_global = descuento.value;
        }


    }
