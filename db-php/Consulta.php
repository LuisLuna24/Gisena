<?php
include "conexion.php";


$Aleatorio = rand(1, 10000000000);
$Cliente =$_POST['Cliente'];
$Tipo = $_POST['Tipo'];
$Nombre = $_POST['Nombre'];
$Cantidad = $_POST['Cantidad'];
$Fecha = $_POST['Fecha'];
$Total = $_POST['Total'];


try{
    $sql="INSERT INTO pedidos (id_Pedidos,Nombre,Cantidad,Total,Cliente,Entrega,Estado,Tipo) VALUES ($Aleatorio,'$Nombre','$Cantidad','$Total','$Cliente','$Fecha','Pendiene','$Tipo')";
    $result=mysqli_query($conexion,$sql);
}catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}






?>