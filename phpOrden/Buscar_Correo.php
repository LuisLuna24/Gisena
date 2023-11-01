<?php

require '../php/conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT MAX(idversion) version_corr , correo FROM public.cliente where razonsocial ILIKE '%$campo%' GROUP BY correo LIMIT 10   ";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_array($query)) {
	$html .= "<option onclick=\"BuscarCorreo('" . $row["correo"] . "')\">" . $row["correo"] ."</option>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);