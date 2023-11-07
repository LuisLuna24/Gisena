$(document).ready(function () {
    $('.OrdenDireccion').on('change','#lista_Clientes',function(){ 
        var res = "lista_Clientes="+$('#lista_Clientes').val();
        var Iniciar  = new FormData($("#Orden_Form")[0]);
        $.ajax({
            type: "POST",
            url: "phpOrden/Buscar_Direcciones.php",
            data: res,
            success: function (response) {
                $('#lista_Direccion').html(response);
            }
        });        
    });
    $('#lista_Direccion').select2();
    
});