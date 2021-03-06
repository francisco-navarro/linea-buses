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
    objetoAjax.open('GET', 'consulta.php?profesion='+ profesion.value, true);
    objetoAjax.send();
    // Al recibir un evento del servidor, llamo a la función respuesta
    objetoAjax.onreadystatechange=respuesta;
}

function respuesta() {
    // Si me ha mandado los datos y la conexion ha sido buena
    if (objetoAjax.readyState==4 && objetoAjax.status ==200) {
        var datosString = JSON.parse(objetoAjax.responseText);
    
        // Cojo el elemento donde voy a mostrar los datos
        seccion = document.getElementById('respuesta');
        seccion.innerHTML = '';
        
        for (i in datosString) {
            var nodo = document.createElement("p");
            var nodoTexto = document.createTextNode(datosString[i].nombre + '  ' + datosString[i].profesion);
            nodo.appendChild(nodoTexto);
            seccion.appendChild(nodo);
        }
    }

}