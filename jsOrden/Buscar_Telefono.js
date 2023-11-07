$(document).ready(function () {
    $('.OrdenDireccion').on('change','#lista_Clientes',function(){ 
        var Iniciar  = new FormData($("#Orden_Form")[0]);
        var res = "lista_Clientes="+$('#lista_Clientes').val();
        $.ajax({
            type: "POST",
            url: "phpOrden/Buscar_Telefono.php",
            data: res,
            success: function (response) {
                $('#lista_Telefono').html(response);
            }
        });        
    });
    $('#lista_Telefono').select2();
});