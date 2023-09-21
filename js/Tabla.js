$(function(){
    tabla();
});

function tabla(){
    $.ajax({
        url: 'db-php/tabala.php',
        type: 'POST',
        success: function(res){
            var js = JSON.parse(res);
            var tabla;
            for(var i = 0;i<js.length;i++){
                tabla+= '<tr><td>'+ js[i].Nombre+'</td><td>'+js[i].Descripcion+'</td><td>'+js[i].Precio+'</td><td>'+js[i].Tamaño+'</td></tr>'
            }
            $('#Datos_Tabla').html(tabla);
        }
    });
}

$(buscar_Datos());

function buscar_Datos(consulta){
    $.ajax({
        url:'db-php/buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#Datos_Tabla').html(res)
    }).fail(function(){
        console.log(error);
    });
}

$(document).on('keyup','#Buscar',function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_Datos(valor);
    }else{
        tabla();
    }
});

$(buscar_Tipo());

function buscar_Tipo(consulta){
    $.ajax({
        url:'db-php/tipo.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#Tipo').html(res)
    }).fail(function(){
        console.log(error);
    });
}


$(document).ready(function(){
    $('#Tipo').val(1);
    recagarlista();

    $('#Tipo').change(function(){
        recagarlista();
    });
})



function recagarlista(){
    $.ajax({
        type:'POST',
        url:'db-php/nombres.php',
        data:'tipo='+ $('#Tipo').val(),
        success:function(res){
            $('#select2lista').html(res);
        }
    });
}

function PecioTotal(){
    cadena='Producto='+ $('#lista2').val(),
    '&Cantidad=' + $('#Cantidad').val();
    $.ajax({
        type:'POST',
        url:'db-php/Precio.php',
        data:cadena,
        success:function(res){
            $('#Total').html(res);
        }
    });
}