$(document).ready(function () {
    $('#Agregar_Analisis').on('click',function(){
        var Iniciar  = new FormData($("#analisis_form")[0]);
        $.ajax({
            type: "POST",
            url: "phpAnalisis/Agregar_Analisis.php",
            data: Iniciar,
            contentType: false,
            processData:false,
            success: function (response) {
                if(response==1){

                }else if(response==2){
                    alert("Este análisis ya fue seleccionado");
                }
            }
        });
        $.ajax({
            type: "POST",
            url: "phpAnalisis/Actualizar_Tabla.php",
            dataType: "html",
            success: function (response) {
                $('#analisis_tabla').html(response);
            }
        });
    });
    $.ajax({
        type: "POST",
        url: "phpAnalisis/Actualizar_Tabla.php",
        dataType: "html",
        success: function (response) {
            $('#analisis_tabla').html(response);
        }
    });
    $('#Actualizar_Tabla').on('click',function(){
        $.ajax({
            type: "POST",
            url: "phpAnalisis/Actualizar_Tabla.php",
            dataType: "html",
            success: function (response) {
                $('#analisis_tabla').html(response);
            }
        });
    });


    $('#Registrar_Analisis').on('click',function(){
        window.location.href = "orden_servicio.php";
    });
});