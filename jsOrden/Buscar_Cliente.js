$(document).ready(function(){
    var Iniciar  = new FormData($("#Singin_Form")[0]);
    $('#lista_Clientes').select2();
    $.ajax({
        type: "POST",
        url:"phpOrden/Buscar_Cliente.php",
        data:Iniciar,
        contentType: false,
        processData:false,
        success:function(responce){
            $('#lista_Clientes').html(responce);
        }
    })
});