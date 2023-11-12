$(document).ready(function () {
    $('#Motarar_Procendencia').on('click',function(){
        $(this).closest('.Procedencia').find('.Ocultar').slideToggle(1000);
    });
});