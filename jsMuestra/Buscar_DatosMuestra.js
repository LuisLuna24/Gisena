$(document).ready(function () {
    $('#Muestra_Urgencia').select2();
    $('#Muestra_Idioma').select2();
    $('#Muestra_Muestra').select2();
    $('#Muestra_Unidad').select2();

    //=====Mensajeria===============
    $.ajax({
        type: "POST",
        url: "phpMuestra/Buscar_Mensajeria.php",
        dataType: "html",
        success: function (response) {
            $('#Muestra_Mensajeria').html(response);
        }
    });
    $.ajax({
        type: "POST",
        url: "phpMuestra/Buscar_Urgencia.php",
        dataType: "html",
        success: function (response) {
            $('#Muestra_Urgencia').html(response);
        }
    });
    $.ajax({
        type: "POST",
        url: "phpMuestra/Buscar_Idioma.php",
        dataType: "html",
        success: function (response) {
            $('#Muestra_Idioma').html(response);
        }
    });
    $.ajax({
        type: "POST",
        url: "phpMuestra/Buscar_Muestra.php",
        dataType: "html",
        success: function (response) {
            $('#Muestra_Muestra').html(response);
        }
    });

    $('#Muestra_Muestra').on('change',function(){
        var Iniciar  = new FormData($("#Muestra_Form")[0]);
        $.ajax({
            type: "POST",
            url:"phpMuestra/Buscar_Unidad.php",
            data:Iniciar,
            contentType: false,
            processData:false,
            success:function(responce){
                $('#Muestra_Unidad').html(responce);
            }
        });
    });

});