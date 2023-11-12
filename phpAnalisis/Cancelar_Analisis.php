<?php
require "../php/conexion.php";
session_start();


$Ordencodigo=$_SESSION['ordentrabajo'];

$Busqueda="SELECT * FROM  ordenserviciomuestralab o where ordencodigo='$Ordencodigo';";
$QueryBusqueda=pg_query($conexion,$Busqueda);
$numBusqueda=pg_num_rows($QueryBusqueda);

if($numBusqueda!=0){
    $EliminarAnalisis="DELETE FROM ordenserviciomuestranalisis where ordencodigo='$Ordencodigo';";
    $EliminarLab="DELETE FROM ordenserviciomuestralab where ordencodigo='$Ordencodigo';";
    pg_query($conexion,$EliminarAnalisis);
    pg_query($conexion,$EliminarLab);
    echo 1;
}else{
    echo 2;
}
?>