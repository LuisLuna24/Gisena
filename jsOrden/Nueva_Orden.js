$(document).ready(function () {
    $("#Enviar_Orden").on('click',function(nuevo){
        var Alerta = document.getElementById('Alerta_Nuevo');
        Alerta.style.display = "flex";
        $('#Label_Alerta_Nueva').text('¿Desea crear una nueva orden?');
    });
    $('#Nuevo_Orden').on('click',function(nuevaor){
        $.ajax({
            type: "POST",
            url: "php/Nuevo_Anlisis.php",
            success: function (response) {
                window.location.href = "orden_servicio.php";
            }
        });
    });
});