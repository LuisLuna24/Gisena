$(document).ready(function(){
    var contraseña1 = document.getElementById("Contraseña1");
    var contraseña2 = document.getElementById("Contraseña2");
    var mensaje = document.getElementById("Registrase_btn");
        
contraseña1.addEventListener("input", validarContraseñas);
contraseña2.addEventListener("input", validarContraseñas);
function validarContraseñas() {
    var pass1 = contraseña1.value;
    var pass2 = contraseña2.value;
    if(pass1===""){
        mensaje.classList.add("Registro_bt");
    }else
     if (pass1 === pass2) {
        contraseña1.style.border= "solid 1px green";
        contraseña2.style.border= "solid 1px green";
        mensaje.classList.remove("Registro_bt");
        $('#Contraseñas_Diferentes').text('');
    } else {
        $('#Contraseñas_Diferentes').text('Las contraseñas no coinciden');
        contraseña1.style.border= "solid 1px red";
        contraseña2.style.border= "solid 1px red";
        mensaje.classList.add("Registro_bt");
        
    }
}
    

});


