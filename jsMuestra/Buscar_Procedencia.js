$(document).ready(function () {
    $('#Muestra_Procedencia').select2();
    $('#Muestra_Estado').select2();
    $('#Muestra_CP').select2();
    $.ajax({
        type: "POST",
        url: "phpMuestra/Buscar_Procedencia.php",
        dataType: "html",
        success: function (response) {
            $('#Muestra_Procedencia').html(response);
        }
    });
    $.ajax({
        type: "POST",
        url: "phpMuestra/Buscar_Estado.php",
        dataType: "html",
        success: function (response) {
            $('#Muestra_Estado').html(response);
        }
    });
    $.ajax({
        type: "POST",
        url: "phpMuestra/Buscar_CP.php",
        dataType: "html",
        success: function (response) {
            $('#Muestra_CP').html(response);
        }
    });
});