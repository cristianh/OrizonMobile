/**
 *  Desarrollodo por Cristian Alberto Hernandez
 *  15 Septiembre 2019
 *  Modificado 06/12/2019
 *  V.0.0.4
 *  app.js
 */

/**
 * @description Funcion que se encargar de cargar las funciones javascript cuando la pagina esta cargando.
 */

var load = function() {
  window.onscroll = function() {
    scrollFunction();
  };

  /**
   * @Funcion que detecta la posicion del scroll de la pagina y de acuerda a ella modifica la posicion de
 * el navbar
   */
  function scrollFunction() {
    /*if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
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
    }*/
  }
};

/**
 * @description Funcion que se encarga de llevar al usuario a la pagina indicada.
 */
function navegar(url) {
  switch (url) {
    case "nosotros":
      window.location.href = "nosotros.html";
      break;
    case "productos":
      window.location.href = "productos.html";
      break;
    case "prepago_y_pospago_persona":
      window.location.href = "prepago_y_pospago_persona.html";
      break;
    case "cloud":
      window.location.href = "cloud.html";
      break;
    case "datacenter":
      window.location.href = "datacenter.html";
      break;
    case "serviceiot":
      window.location.href = "servicios_iot.html";
      break;
    case "conectividad":
      window.location.href = "conectividad.html";
      break;
    case "movilidad":
      window.location.href = "movilidad.html";
      break;
    case "serviceit":
      window.location.href = "servicios_it.html";
      break;
    case "celytecnologia":
      window.location.href = "celytecnologia.html";
      break;
    case "cotizar":
      window.location.href = "index.html";
      break;
    case "telymovi":
      window.location.href = "telymovil.html";
      break;
    case "servicio_saletital":
      window.location.href = "conexionsatelital.html";
      break;
    case "datos_corporativos":
      window.location.href = "datoscorpotativos.html";
      break;
    case "soporte_tecnico":
      window.location.href = "soportetecnico.html";
      break;
    case "largadistancia":
      window.location.href = "largadistancia.html";
      break;
    case "vozip":
      window.location.href = "vozip.html";
      break;
    case "servicios":
      window.location.href = "servicios.html";
      break;
    case "empresa":
      window.location.href = "empresa.html";
      break;
    case "persona":
      window.location.href = "persona.html";
      break;
    case "troncal_sip":
      window.location.href = "troncal_sip.html";
      break;
    case "m2m":
      window.location.href = "m2m.html";
      break;
    case "wifinube":
      window.location.href = "wifinube.html";
      break;
    case "crossconection":
      window.location.href = "crossconection.html";
      break;
case "contactenos":
      window.location.href = "contactenos.html";
      break;

    default:
      window.location.href = "index.html";
      break;
  }
}

/**
 * @description Funcion que se encarga de pasar el numero a la pagina comprar.php para mostrar el celular al que se le dio click.
 * @param {int} id 
 */
function iraComprar(id) {
  window.location.href = "comprar.php?id=" + id;
}

/**
 * @description Funcion que se encarga de pasar el numero a la pagina cotizar_internet.php para mostrar el plan al que se le dio click.
 * @param {int} id 
 */
function iraCotizarInternet(id) {
  window.location.href = "cotizar_internet.php?valor=" + id;
}

/**
 * @function Funcion  que se encarga de buscar una tema-pregunta en la pagina PQRS.
 */
function buscarTitulo() {
  var input, filter, table, tr, td, i, txtValue;
  //Tomamos el campo "buscador".
  input = document.getElementById("buscador");
  //Pasamos el texto a Mayuscula.
  filter = input.value.toUpperCase();
  //Tomamos la referencia de la tabla.
  table = document.getElementById("preguntas");
  //Capturamos la table-row de las paginas.
  tr = table.getElementsByTagName("tr");
  //Recorremos cada una de las table-rows.
  for (i = 0; i < tr.length; i++) {
    //Tomamos los table-data
    td = tr[i].getElementsByTagName("td")[0];
    //si existe una tabla-data.
    if (td) {
      // tomamos la variable textValue y le asignamos  todo el texto con los nodos hijos  de la table-data o el texto en si de la table-dta
      txtValue = td.textContent || td.innerText;
      // Si el textos no es igual a el filtro buscado ocultamos el campo.
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        // Si el texto no es igual a el filtro  ocultamos el resto de campos
        // de la tabla y dejamos solo el filtro buscado.
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

this.load();
