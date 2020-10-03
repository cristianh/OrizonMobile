 (function () {
            /**
             * Utilizo la libreria emailjs.js para enviar la informacion de correo de acuerdo al un proveedor
             * Establecido en la pagina www.emailjs.com (proveedor 	SendGrid)
             */
            emailjs.init("user_sUtNbYPdP6TzUzRUwlOkq");
        })();
        /**
         * @description Funcion para enviar correo a soporte tecnico.
         * @param {event} event 
         */
        function enviar_email(event) {
            //Evitamos que el formulario se envien.
            event.preventDefault();
            //Tomamos la referencia del formulario.
            var myform = document.getElementById('form');
            //Pasamos la informacion al objeto que se va a enviar.
            var template_params = {
                "from_name": "Soporte Tecnico RealMobile",
                "nombre_usuario": document.getElementById('fname').value,
                "apellido_usuario": document.getElementById('lapellido').value,
                "correo": document.getElementById('lcorreo').value,
                "mensaje": document.getElementById('mensaje').value,
                "ciudad": document.getElementById('ciudad').value
            }
            //Reiniciamos los campos.
            document.getElementById('fname').value='',
            document.getElementById('lapellido').value='',
            document.getElementById('lcorreo').value='',
            document.getElementById('mensaje').value='',
            document.getElementById('ciudad').value=''

            //Invocamos los parametros para enviar el correo.
            var service_id = "default_service";
            var template_id = "realmobile";
            emailjs.send(service_id, template_id, template_params);
                        document.getElementById('respuesta').style.display='block';
                        document.getElementById('respuesta').style.animation='fadeOut 4s ';
            // esperamos que termine de enviar el mensaje y le damos tiempo al mensaje que notifique.
           setTimeout(function(){
            document.getElementById('respuesta').style.display='none';
           },2600);
        }