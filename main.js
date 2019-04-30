var objetoAjax;

function AJAXcrearObjeto() {
    if(window.XMLHttpRequest) {
    // navegadores que siguen los estándares
    objetoAjax = new XMLHttpRequest();
    } else{
    // navegadores obsoletos
    objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
    }   
    return objetoAjax;
}

function consultar() {
    objetoAjax = AJAXcrearObjeto();
    objetoAjax.open('GET', 'consulta.php?profesion'+ profesion.value, true);
    objetoAjax.send();
    // Al recibir un evento del servidor, llamo a la función respuesta
    objetoAjax.onreadystatechange=respuesta;
}

function respuesta() {
    // Si me ha mandado los datos y la conexion ha sido buena
    if (objetoAjax.readystate==4 && objetoAjax.status ==200) {
        alert(objetoAjax.responseText);
        var datosString = Json.parse(objetoAjax.responseText);
    }

    // Cojo el elemento donde voy a mostrar los datos
    seccion = document.getElementById('respuesta');

    for (i in datosString) {
        var nodo = document.createElement("p");
        var nodoTexto = document.createTextNode(datosString[i].profesion);
        nodo.appendChild(nodoTexto);
    }

}