<?php

require '../php/conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT MAX(idversion) version_direc,domicilio FROM public.cliente where razonsocial ILIKE '%$campo%' GROUP BY domicilio  LIMIT 10 ";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_array($query)) {
	$html .= "<option onclick=\"mostrarDireccion('" . $row["domicilio"] . "')\">" . $row["domicilio"] ."</option>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);