$(document).ready(function(){
    var Iniciar  = new FormData($("#analisis_form")[0]);
    $('#Lista_Laboratorio').select2();
    $.ajax({
        type: "POST",
        url:"phpAnalisis/Buscar_Laboratorio.php",
        data:Iniciar,
        contentType: false,
        processData:false,
        success:function(responce){
            $('#Lista_Laboratorio').html(responce);
        }
    })
});