'use strict'

$('logIn').submit(function(ev){
    ev.preventDefault()
    $.ajax({
    // la URL para la petición
    url : 'login.php',
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : $('logIn').serialize(),
 
    // especifica si será una petición POST o GET
    type : 'POST',
  
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(response) {
        console.log(response)
    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function(xhr, status) {
        alert('Disculpe, existió un problema');
    },
 
    // código a ejecutar sin importar si la petición falló o no
    complete : function(xhr, status) {
        alert('Petición realizada');
    }
});
})