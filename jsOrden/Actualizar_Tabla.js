$(document).ready(function(){
    var Iniciar  = new FormData($("#Singin_Form")[0]);
    $('.Orden_Nuevo').on('click','#Actualizar_Tabla',function(){
        $.ajax({
            type: "POST",
            url:"phpOrden/Actualizar_Tabla.php",
            data:Iniciar,
            contentType: false,
            processData:false,
            success:function(responce){
                $('#Tabla_Datos').html (responce);
            }
        })
    });
    
});