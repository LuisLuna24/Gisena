$(document).ready(function () {
    $('.OrdenDireccion').on('change','#lista_Clientes',function(){ 
        var Iniciar  = new FormData($("#Orden_Form")[0]);
        var res = "lista_Clientes="+$('#lista_Clientes').val();
        $.ajax({
            type: "POST",
            url: "phpOrden/Buscar_Correo.php",
            data: res,
            success: function (response) {
                $('#lista_Correo').html(response);
            }
        });        
    });
    $('#lista_Correo').select2();
});