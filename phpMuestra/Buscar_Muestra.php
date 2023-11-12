<?php

require '../php/conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT DISTINCT  MAX(idversion) version_muestra, idmuestra,espanol FROM public.muestra where espanol ILIKE '%$campo%' GROUP BY idmuestra,espanol  ";
$query = pg_query($conexion,$sql);

$htmli = "<option class='Opciones_Tipo' value=''>Seleccione una muestra</option>";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<option value=".$row["idmuestra"].">" . $row["espanol"] ."</option>";
}

echo $htmli;

?>