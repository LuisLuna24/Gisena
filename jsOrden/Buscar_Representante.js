$(document).ready(function(){
    var Iniciar  = new FormData($("#Singin_Form")[0]);
    $('#Lista_Representante').select2();
    $.ajax({
        type: "POST",
        url:"phpOrden/Buscar_Representante.php",
        data:Iniciar,
        contentType: false,
        processData:false,
        success:function(responce){
            $('#Lista_Representante').html(responce);
        }
    })
    var checkbox = document.getElementById('Check_Representante');
    var select = document.getElementById('Lista_Representante');
    checkbox.addEventListener('change', function() {
        select.disabled = !checkbox.checked;
    });

});


