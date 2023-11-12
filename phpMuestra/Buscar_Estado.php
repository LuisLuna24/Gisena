<?php

require '../php/conexion.php';

$sql = "SELECT * FROM public.ciudad LIMIT 10 ";
$query = pg_query($conexion,$sql);

$htmli = "<option>Seleccione Estado</option>";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<option value=".$row["idciudad"]." >" . $row["ciudad"] ."</option>";
}

echo $htmli;

?>