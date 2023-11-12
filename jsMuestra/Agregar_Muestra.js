$(document).ready(function () {
    $('#Agregar_Muestra').on('click',function(){
        var Iniciar= new FormData($("#Muestra_Form")[0]);
        $.ajax({
            type: "POST",
            url: "phpMuestra/Agregar_Muestra.php",
            data: Iniciar,
            contentType: false,
            processData:false,
            success: function (response) {
                if(response==1){
                    window.location.href = "orden_analisis.php";
                }else{
                    alert('Datos incompletos o inválidos');
                }
            }
        });
    });
});