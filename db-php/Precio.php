<?php
include "conexion.php";

$Producto = $_POST['Producto'];
$Cantidad=$_POST['Cantidad']



$sql="SELECT id_Productos,Tipo,Pesio FROM poductos where id_Producto = '$Producto'";
$result=pg_connect($conexion,$sql);

while($fila = $resultado->fetch_assoc()){
    $salida.=$fila['Pesio']*$Cantidad;
}
echo $salida;
?>