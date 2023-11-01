<?php
require "php/conexion.php";
session_start();
$id_Usuario=$_SESSION['id_usuario'];


$BusMisanaliss="SELECT * FROM  misanalisis where id_cliente = '$id_Usuario';";
$querymisAnalisis=pg_query($conexion,$BusMisanaliss);
while($row=pg_fetch_assoc($querymisAnalisis)){
    $id_mianalisis=$row['id_mianalisis'];
    $ordencodigo=$row['ordencodigo'];
    echo $id_mianalisis."-".$ordencodigo;
}

?>