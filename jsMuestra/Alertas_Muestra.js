$(document).ready(function () {
    $('#Cancelar_Muestra').on('click',function(alert){
         $('#Label_Alerta_Cancelar').text('Estas seguro que quieres canselar la muestra');
         var Alerta = document.getElementById('Alerta_Cancelar');
         Alerta.style.display = "flex";
    });
    $('.Alerta_Boton').on('click','#Continuar_Orden',function(cont){
         var Alerta = document.getElementById('Alerta_Cancelar');
         Alerta.style.display = "none";
    });
    $('.Alerta_Boton').on('click','#Cancelar_Orden',function (cancel) {
         $.ajax({
             type: "POST",
             url: "phpOrden/Cancelar_Orden.php",
             success: function (response) {
                 if(response==1){
                     $('#Label_Alerta_Inicio').text('Orden Cancelada');
                     var Alerta = document.getElementById('Alerta_Regresar');
                     Alerta.style.display = "flex";
                 }else{
                     alert(response);
                 }
             }
         });
 
    })
    $('#Inicio_Orden').on('click',function(){
         window.location.href = "Principal.php";
    }); 
 });