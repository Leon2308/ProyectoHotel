$(document).ready(function () {
/*
    $("#claveUser").focusin(function () {
        $("#nombreUser").fadeOut(300, function () {
            $("#claveUserComprueba").fadeIn(200);
        });
    }); //Oculta nombre usuario y muestra un campo para comprobar la clave

    $(".camposRegistroUsusarios").dblclick(function () {
        $("#claveUserComprueba").fadeOut(300, function () {
            $("#nombreUser").fadeIn(200);
        });
    }); //Oculta el campo de comprobar la clave y muestra el de usuario
*/
    //Validación del formulario.
    $("#formRegistroUsusarios").validate({
        rules: {
            clave: {required: true, minlength: 8, maxlength: 20},
            claveComprueba: {
                equalTo: "#claveUser"
            },
            dni: {required: true, minlength: 10, maxlength: 10},
            nombre: {required: true},
            apellido1: {required: true},
            apellido2: {required: false},
            usuario: {required: true}
        },
        messages: {
            clave: "La clave debe contener minimo 8 caracteres",
            dni: "Introduce una cedula válida",
            nombre: "Campo Requerido",
            apellido1: "Campo Requerido",
            usuario: "Campo Requerido",
            claveComprueba: "Las claves no coinciden"
        },

        errorPlacement: function (error, element) {
            error.insertBefore(element);
        } //Inserta los mensajes de error por encima de cada campo.
    });
});

      function validar() {
        var cad = document.getElementById("ced").value.trim();
        var total = 0;
        var longitud = cad.length;
        var longcheck = longitud - 1;

        if (cad !== "" && longitud === 10){
          for(i = 0; i < longcheck; i++){
            if (i%2 === 0) {
              var aux = cad.charAt(i) * 2;
              if (aux > 9) aux -= 9;
              total += aux;
            } else {
              total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
            }
          }

          total = total % 10 ? 10 - total % 10 : 0;

          if (cad.charAt(longitud-1) == total) {
            document.getElementById("salida").innerHTML = ("Cedula Válida");
          }else{
            document.getElementById("salida").innerHTML = ("Cedula Inválida");
          }
        }
      }
