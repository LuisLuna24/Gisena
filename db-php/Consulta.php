<?php
include "conexion.php";


$Aleatorio = rand(1, 10000000000);
$Producto= $_POST['Producto'];

$Cantidad = $_POST['Cantidad'];
$Total = $_POST['Total'];

$Imagen = $_POST['Imagen'];
$Descripcion = $_POST['Descripcion'];

$Cliente =$_POST['Cliente'];
$Telefono = $_POST['Telefono'];




try{
    $sql="INSERT INTO pedidos (id_Pedidos,Nombre,Cantidad,Total,Cliente,Entrega,Estado,Tipo) VALUES
    ($Aleatorio,'$Producto','$Cantidad','$Total','$Imagen','$Descripcion','$Cliente','$Telefono', 'Pendiene')";
    $result=mysqli_query($conexion,$sql);
}catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}






?>