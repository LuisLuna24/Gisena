$(document).ready(function(){
    $('.Datos_Sesion').on('click','#Singin_eye',function(eye){
        eye.preventDefault();
        var campoPassword = document.getElementById("Singin_Contraseña");
        var eye=document.getElementById("eye_img");
        if(campoPassword.type=="password"){
            campoPassword.type = "text";
            eye.src="img/eyen.webp";
        }else if(campoPassword.type=="text"){
            campoPassword.type = "password";
            eye.src="img/eye.webp";
        }
    });
});

$(document).ready(function(){
    $('.Datos_Sesion').on('click','#Singup1_eye',function(eye){
        eye.preventDefault();
        var campoPassword1 = document.getElementById("Contraseña1");
        var eye1=document.getElementById("eye1_img");
        if(campoPassword1.type=="password"){
            campoPassword1.type = "text";
            eye1.src="img/eyen.webp";
        }else if(campoPassword1.type=="text"){
            campoPassword1.type = "password";
            eye1.src="img/eye.webp";
        }
    });
});

$(document).ready(function(){
    $('.Datos_Sesion').on('click','#Singup2_eye',function(eyen){
        eyen.preventDefault();
        var pasword2 = document.getElementById("Contraseña2");
        var eye2=document.getElementById("eye2_img");
        if(pasword2.type=="password"){
            pasword2.type = "text";
            eye2.src="img/eyen.webp";
        }else if(pasword2.type=="text"){
            pasword2.type = "password";
            eye2.src="img/eye.webp";
        }
    });
});
