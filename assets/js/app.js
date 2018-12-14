'use strict'

$('#logIn').submit(function(ev){
    ev.preventDefault()
    $.ajax({
        method: "POST",
        url: "login.php",
        dataType: 'html',
        data: {name:'ss'}
    }).done(function(data) {
      console.log(data); // imprimimos la respuesta
    }).fail(function() {
      console.log("Algo salió mal");
    }).always(function() {
      console.log("Siempre se ejecuta")
    });
})