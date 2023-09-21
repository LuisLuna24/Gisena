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
<!--=======================================Segunda Parete=====================================-->
    <section class="Pedidos">
        <div class="Pedidos_Contenedor">
            <div class="Pedidos_Acciones">
                <div class="Busqueda">
                    <label>Buscar:</label>
                    <input type="text" id="Buscar" placeholder="Buscar Producto en la Tabla">
                </div>
                <div>
                    <div class="Agergar">
                        <h1 class="Agregar_Titulo">Agregar Pedido</h1>
                        <form action="" id="Frm_Pedidos" class="Formulario">

                            <label>Tipo de Producto</label>
                            <select class="Agregar_Datos" type="" id="Tipo"></select>
                            <label>Nombre Producto</label>
                            <div id="select2lista" class="Agregar_Datos"></div>
                            
                            <label>Cantidad</label>
                            <input class="Agregar_Datos" type="text" id="Cantidad" placeholder="Cantidad">
                            <label>Total</label>
                            <input class="Agregar_Datos" type="text" id="Total" placeholder="Total de Pedidos">
                            
                            <label>Imagen</label>
                            <input class="Agregar_Datos" type="text" id="Imagen">
                            <label>Descripción</label>
                            <input class="Agregar_Datos" type="text" id="Descipcion" placeholder="Descripcion del pedido">
                            
                            <label>Cliente</label>
                            <input class="Agregar_Datos" type="text" id="Cliente" placeholder="Nombre Cliente">
                            <label>Telefono</label>
                            <input class="Agregar_Datos" type="text" id="Telefono" placeholder="Telefono Cliente">

                            <h5 id="Respuesta" class="Respuesta"></h5>
                            <input  type="submit" value="Enviar" id="Enviar" class="Pedidos_Boton">
                        </form>
                    </div>
                </div>
            </div>
            <div class="Pedidos_Tabla">
                <table class="Tabla_Pedidos">
                    <thead class="Datos_Tabla">
                        <th>Tipo</th>
                        <th>Descipcion</th>
                        <th>Pecio</th>
                        <th>Tamaño</th>
                    </thead>
                    <tbody class="Datos" id="Datos_Tabla">

                    </tbody>
                </table>
                <script src="js/Tabla.js"></script>

            </div>
        </div>
    </section>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#Enviar').click(function() {
			event.preventDefault();

            if ($('#Cliente').val() == "") {
				alert("Debes agregar el cliente");
				return false;
			} else if ($('#Tipo').val() == "") {
				alert("Debes agregar la tipo");
				return false;
			}else if ($('#Nombre').val() == "") {
				alert("Debes agregar la nombre");
				return false;
			}else if ($('#Cantidad').val() == "") {
				alert("Debes agregar la cantidad");
				return false;
			}

			cadena = "Producto=" + $('#lista2').val() +
				"&Cantidad=" + $('#Cantidad').val() +
                "&Total=" + $('#Total').val() +
                "&Imagen=" + $('#Imagen').val() +
                "&Descripcion=" + $('#Descipcion').val() +
                "&Cliente=" + $('#Cliente').val(), 
                "&Telefono=" + $('#Telefono').val();

			$.ajax({
				type: "POST",
				url: "db-php/Consulta.php",
				data: cadena,
            })
            .done(function(res){
                $('#Respuesta').html('');
                $('#Respuesta').html('Enviado');
            })
            .fail(function(res){
                $('#Respuesta').html('Error al Enviar');
            })
            .always(function(res){
                console.log('Enviado');
            });
		});
	});
</script>

<?php  } ?>



