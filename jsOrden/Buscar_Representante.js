$(document).ready(function () {
    $(".Representante").on('keyup','#Orden_Representante', function () {
        var Iniciar  = new FormData($("#Singin_Form")[0]);
        $.ajax({
            type: "POST",
            url: "phpOrden/Buscar_Representante.php",
            data: Iniciar,
            contentType: false,
            processData:false,
            success: function (response) {
                
            }
        });
        
    });


    


    var checkbox = document.getElementById('Check_Representante');
    var select = document.getElementById('Orden_Representante');
    checkbox.addEventListener('change', function() {
        select.disabled = !checkbox.checked;
    });
});



