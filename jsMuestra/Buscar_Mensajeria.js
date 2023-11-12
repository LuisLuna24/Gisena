//Mensajeria============================================================
$(document).ready(function () {
    $('#Muestra_Mensajeria').select2();
    $('.Mensajeria').on('change','#Muestra_Mensajeria',function(){
        var Iniciar  = new FormData($("#Muestra_Form")[0]);
        $.ajax({
            type: "POST",
            url:"phpOrden/Buscar_Cliente.php",
            data:Iniciar,
            contentType: false,
            processData:false,
            success:function(responce){
                $('#lista_Clientes').html(responce);
            }
        });
    });
    var checkbox = document.getElementById('Mensajeria_Check');
    var select = document.getElementById('Muestra_Mensajeria');
    var guia = document.getElementById('Mensajeria_Guia');
    checkbox.addEventListener('change', function() {
        select.disabled = !checkbox.checked;
        guia.disabled = !checkbox.checked;
    }); 
});


