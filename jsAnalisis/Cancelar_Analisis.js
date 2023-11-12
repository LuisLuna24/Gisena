$(document).ready(function () {
    $('#Cancelar').on('click',function(){
        $('#Label_Alerta_Cancelar').text('¿Estas seguro que quieres canselar los analisis?');
         var Alerta = document.getElementById('Alerta_Cancelar');
         Alerta.style.display = "flex";
    });
    $('#Continuar_Analisis').on('click',function(){
        var Alerta = document.getElementById('Alerta_Cancelar');
         Alerta.style.display = "none";
    });
    $('#Cancelar_Analisis').on('click',function(){
        $.ajax({
            type: "POST",
            url: "phpAnalisis/Cancelar_Analisis.php",
            datatype: "html",
            success: function (response) {
                if(response==1){
                    $('#Label_Alerta_CancelarExito').text('Se acanselado con exito el analisis');
                    $('#Titulo_AlertaExito').text('! Exito !');
                    var Alerta = document.getElementById('Alerta_Exito');
                    Alerta.style.display = "flex";
                }
            }
        });
    });
    $('#Cancelar_Regresar').on('click',function(){
        window.location.href = "orden_muestra.php";
    });
});

