<?php

require '../php/conexion.php';

$sql = "SELECT * FROM public.codigopostal LIMIT 10 ";
$query = pg_query($conexion,$sql);

$htmli = "";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<option value=".$row["idcodigopostal"].">" . $row["codigopostal"] ."</option>";
}

echo $htmli;

?>