$(document).ready(function() { 
    $('.Singin_Imagen').on('click','#Singin_up',function(e){
        e.preventDefault();
        $(this).closest('.Singin_Contenedor').find('.Singup_Datos').slideToggle(600,function(i){
            $('.Pregunta').html('¿Ya tienes cuenta? <span><a class="Respuesta" href="#" id="Singup_in">Iniciar Sesión</a></span>');
        });
        $(this).closest('.Singin_Contenedor').find('.Singin_Datos').slideToggle({direction: "right",duration: 10,easing:'linear'},'slow');
        
    });
    $('.Singin_Imagen').on('click','#Singup_in',function(e){
        e.preventDefault();
        $(this).closest('.Singin_Contenedor').find('.Singup_Datos').slideToggle({direction: "left",duration: 10,easing:'linear'},'slow');
        $(this).closest('.Singin_Contenedor').find('.Singin_Datos').slideToggle(600,function(r){
            $('.Pregunta').html('¿No tienes cuenta? <span><a class="Respuesta" href="#" id="Singin_up">Regístrate</a></span>');
        });
        
    });
 });