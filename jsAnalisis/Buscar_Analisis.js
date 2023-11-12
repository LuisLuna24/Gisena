$(document).ready(function(){
    $('#Lista_Analisis').select2();
    $(document).ready(function(){
        $('#Lista_Laboratorio').val(1);
        recagarlista();
    
        $('#Lista_Laboratorio').change(function(){
            recagarlista();
        });
    })
    
    function recagarlista(){
        $.ajax({
            type:'POST',
            url:'phpAnalisis/Buscar_Analsis.php',
            data:'tipo='+ $('#Lista_Laboratorio').val(),
            success:function(res){
                $('#Lista_Analisis').html(res);
            }
        });
    }
});