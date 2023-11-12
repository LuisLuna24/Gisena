<?php
require '../php/conexion.php';
session_start();

$salida = "<option class='Opciones_Tipo' value='0'>Seleccione Laboratorio</option>";

$q = isset($_POST['consulta']) ? $conexion->real_escape_string($_POST['consulta']) : null;

$muestra=$_SESSION['muestra'];

$querry = "SELECT MAX(idversion)idversion,laboratorio.idlaboratorio AS laboratorioid,idmuestra,nombre FROM muestranalisis inner join laboratorio on muestranalisis.idlaboratorio = laboratorio.idlaboratorio where muestranalisis.idmuestra  = '$muestra' GROUP BY laboratorioid,idmuestra,nombre LIMIT 10 ";

$resultado=pg_query($conexion,$querry);
$num_rows=pg_num_rows($resultado);

if($num_rows >0){
    while($row = pg_fetch_assoc($resultado)){
        $salida.="<option  value=".$row['laboratorioid'].">".$row['nombre']."</option>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
?>