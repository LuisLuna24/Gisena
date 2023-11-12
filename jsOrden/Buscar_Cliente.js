$(document).ready(function(){
    $('#lista_Clientes').select2();
    var Iniciar  = new FormData($("#Singin_Form")[0]);
    $.ajax({
        type: "POST",
        url:"phpOrden/Buscar_Cliente.php",
        dataType: "html",
        success:function(responce){
            $('#lista_Clientes').html(responce);
        }
    });
}); 
