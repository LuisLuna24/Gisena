$(document).ready(function(){
    $('.Singin_Boton').on('click','#Registrase_btn',function(Reg){
        Reg.preventDefault();
        
        if($('#Nombre').val() ==""){
            $('#Faltan_Datos').text('Ingrese su Nombre');
            return false;
        }else if($('#Apellido').val() ==""){
            $('#Faltan_Datos').text('Ingrese su Apellidos');
            return false;
        }else if($('#Telefono').val() ==""){
            $('#Faltan_Datos').text('Ingrese su Telefono');
            return false;
        }else if($('#Correo').val() ==""){
            $('#Faltan_Datos').text('Ingrese su Correo');
            return false;
        }else if($('#Contraseña1').val() ==""){
            $('#Faltan_Datos').text('Ingrese su Contraseña');
            return false;
        }else{
            $('#Faltan_Datos').text('');
        }

        var parametros = new FormData($("#Registar_Form")[0]);
        $.ajax({
            type: "POST",
            url: "php/Registrar.php",
            data: parametros,
            contentType: false,
            processData:false,
            success: function (response) {
                if(response==1){
                    var Alert = document.getElementById('Alerta');
                    Alert.style.display = "flex";
                    $('#Registar_Form')[0].reset();
                }else if(response==2){
                    $('#Faltan_Datos').text('El correo no está disponible');
                    $('#Correo').style.border= "solid 3px red";
                }
            }
        });
    });

    $('#Alerta_btn').on('click',function(alert){
        alert.preventDefault();

        var Alert = document.getElementById('Alerta');
        Alert.style.display = "none";
    });
});