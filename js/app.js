/**
 *  Desarrollodo por Cristian Alberto Hernandez
 *  15 Septiembre 2019
 *  Modificado 18/09/2019
 *  V.0.0.1
 *  app.js
 */


/**
 * Funcion que se encargar de cargar las funciones javascript cuando pa pagina esta cargando.
 * @function Funcion que detecta la posicion del scroll de la pagina y de acuerda a ella modifica la posicion de
 * el navbar
 * @param null
 */

var load = function() {
    window.onscroll = function() { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "80px 10px 30px 10px";
            document.getElementById("logo").style.fontSize = "25px";
            document.getElementById("logo-subtext").style.fontSize = "10px";
        } else {
            document.getElementById("navbar").style.padding = "90px 10px 30px 10px";
            document.getElementById("logo").style.fontSize = "29px";
            document.getElementById("logo-subtext").style.fontSize = "14px";
        }
        if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
            document.getElementById("navbar").style.position = "fixed";
        } else {
            document.getElementById("navbar").style.position = "relative";
        }
    }
}


/**
 * @function Funcion que se encarga de llevar al usuario a la pagina de nosotros al hacer clic.
 */
function navegar() {
    window.location.href = 'nosotros.html';
}


/**
 * @function Funcion que se encarga de llevar al usuario a la pagina de nosotros al hacer clic.
 */
function irAproductos() {
    window.location.href = 'productos.html';
}

function irPrepagoPersona() {
    window.location.href = 'prepago_persona.html';
}

function irPospagoPersona() {
    window.location.href = 'pospago_persona.html';
}

function irCelytecnologia() {
    window.location.href = 'celytecnologia.html';
}

/**
 * @function Funcion  que se encarga de buscar una tema-pregunta en la pagina PQRS.
 */
function buscarTitulo() {

    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscador");
    filter = input.value.toUpperCase();
    table = document.getElementById("preguntas");
    tr = table.getElementsByTagName("tr");


    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

//Funcionalidad para la pagina  PQRS con tabla de busqueda de contenido y opcion desplegable.
var idacoordeaon = document.getElementsByClassName("accordion");
var elementos;
// Asignamos la funcionalidad de  desplegarse al tema al hacer clic en el mas.
for (elementos = 0; elementos < idacoordeaon.length; elementos++) {
    idacoordeaon[elementos].addEventListener("click", function() {
        this.classList.toggle("active-pqrs");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

}
this.load();