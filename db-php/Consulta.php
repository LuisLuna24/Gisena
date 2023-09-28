<?php
include "conexion.php";


$Aleatorio = rand(1, 1000000);
$Producto= $_POST['Producto'];


$Cantidad = $_POST['Cantidad'];
$Total = $_POST['Total'];

$Imagen = pg_escape_string($_FILES['Imagen']['Ima_P']);
$Descripcion = $_POST['Descripcion'];


$Cliente =$_POST['Cliente'];
$Telefono = $_POST['Telefono'];

$consulta ="INSERT INTO pedidos(
	id_venta, id_poductos, cantidad, presio_venta, imagen, descripcion, nombre_cliente, telefono, estado)
	VALUES ($Aleatorio, $Producto, $Cantidad, $Total, '$Imagen', $Descripcion, $Cliente, $Telefono, 'Pendiente');";

$resultado=pg_query($conexion,$consulta);






?>