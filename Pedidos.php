<?php 
ob_start();
    session_start();
    $salida="";
        $varSesion=$_SESSION["usuario"];
        if ($varSesion==''|| $varSesion==null) {
            header("location:index.php");
        }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Pedidos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@100&display=swap" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <?php require('Global/cabesera.php'); ?>
<!--=======================================Primer Parete=====================================-->
    <section class="Cabesera">
        <div class="Cabesera_Contenedor">
            <div class="Cabesera_Logo">
                <img src="img/LumarLogo.png" alt="Logo Lumar">
                <h1>Bienvenido</h1>
                <h2>Pedidos</h2>
            </div>
            <div class="Cabesera_Descripcion">
                <h1>Descripción</h1>
                <p>Agrega tus pedidos de los diferentes productos que se ofrecen, los cuales dependiendo de cada producto puede ir en serigrafía, estampado, DTF, impresión y sublimación. <br> <label>Estos pedidos son para compras a menudeo. </label></p>
            </div>
        </div>
    </section>
<!--=======================================Primer Parete=====================================-->
    <section class="Pedidos">
        <div class="Pedidos_Contenedor">
            <div class="Pedidos_Acciones">
                <div class="Busqueda">
                    <input type="text" id="No_Funcoona">
                </div>
                <div>
                    <div class="Agergar">
                        <form action="" id="Frm_Pedidos">
                            <label>Cliente</label>
                            <input type="text" id="Cliente">
                            <label>Tipo de Producto</label>
                            <input type="text" id="Tipo">
                            <label>Nombre Producto</label>
                            <input type="text" id="Nombre">
                            <label>Cantidad</label>
                            <input type="text" id="Cantidad">
                            <label>Fecha Entrega (Opcinal)</label>
                            <input type="date" id="Fecha">
                            <label>Total</label>
                            <input type="text" id="Total">
                            <h5 id="Respuesta"></h5>
                            <input type="submit" value="Enviar" id="Enviar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="Pedidos_Tabla">

            </div>
        </div>
    </section>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#Enviar').click(function() {
			event.preventDefault();

			cadena = "Cliente=" + $('#Cliente').val() +
				"&Tipo=" + $('#Tipo').val() +
                "&Nombre=" + $('#Nombre').val() +
                "&Cantidad=" + $('#Cantidad').val() +
                "&Fecha=" + $('#Fecha').val() +
                "&Total=" + $('#Total').val() ;

			$.ajax({
				type: "POST",
				url: "db-php/Consulta.php",
				data: cadena,
            })
            .done(function(res){
                $('#Respuesta').html('Enviado');
            })
            .fail(function(res){
                console.log('Error')
            })
            .always(function(res){
                console.log('Enviado');
            });
		});
	});
</script>

<?php  } ?>



