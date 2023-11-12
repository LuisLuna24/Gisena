<?php
require "../php/conexion.php";
session_start();

$Ordentrabajo=$_SESSION['ordentrabajo'];

$Consulta="SELECT * FROM public.ordenserviciomuestra where ordencodigo='$Ordentrabajo'; ";
$queryConsulta=pg_query($conexion,$Consulta);

$rowsConsulta=pg_num_rows($queryConsulta);

if($rowsConsulta==0){
    echo 1;
}else{
    $BorrarMuetra="DELETE FROM ordenserviciomuestra where ordencodigo ='';";
    pg_query($conexion,$BorrarMuetra);
    echo 1;
}

?>