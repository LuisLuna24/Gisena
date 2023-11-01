$(document).ready(function(){
    $('.Menu_Opciones').on('click','#Nuevo_Analisis',function(newA){
        newA.preventDefault();

        $.ajax({
            type: "POST",
            url: "php/Nuevo_Anlisis.php",
            data: "Analisis="+$('#Nuevo_Analsis'),
            success: function (response) {
                if(response==1){
                    window.location.href = "Orden_Servicio.php";
                }else if(response==2){
                    var Alert = document.getElementById('Alerta_Analisis');
                    Alert.style.display = "flex";
                    $('#Label_Alerta_Secion').text('Ha ocurrido un error inesperado');
                }
                
            }
        });
    });
    $('.Alerta_Boton').on('click','#Alerta_btn_Secion',function(ale){
        var Alert = document.getElementById('Alerta_Analisis');
        Alert.style.display = "none";
    });
});