const xhr = new XMLHttpRequest();

    $('#formulario').submit(function(e){
        e.preventDefault();

        xhr.data = {
            nombre_usuario: $("#Ususario").val(),
            contraseña: $("#Password").val(),
        };

        xhr.send();

        xhr.onload = function(){
            if(xhr.status === 200){
                sessionStorage.setItem("usuario", xhr.responseText);
                location.href = "/";
            }else{
                alert("Nombre de usuario o contraseña incorrectos");
            }
        };
    });
