$(document).ready(function () {
    $('#Cancelar_MuestraAlerta').on('click',function(){
        $.ajax({
            type: "POST",
            url: "phpMuestra/Cancelar_Muestra.php",
            dataType: "html",
            success: function (response) {
                if(response==1){
                    $('#Label_Alerta_Exito').text('La muestra fue cancelada');
                    var Alerta = document.getElementById('Alerta_CancelarExito');
                    Alerta.style.display = "flex";
                    var Alerta2 = document.getElementById('Alerta_Cancelar');
                    Alerta2.style.display = "none";
                }else{

                }
            }
        });
    });
    $('#Continuar_Muestra').on('click',function(alert){
        alert.preventDefault();
        var Alerta = document.getElementById('Alerta_Cancelar');
        Alerta.style.display = "none";
    });
    $('#Regresar_Orden').on('click',function(alert){
        alert.preventDefault();
        var Alerta = document.getElementById('Alerta_CancelarExito');
        Alerta.style.display = "none";
        window.location.href = "orden_servicio.php";
    });
});