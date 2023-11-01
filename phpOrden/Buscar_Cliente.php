<?php

require '../php/conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT * FROM public.cliente where razonsocial ILIKE '%$campo%' LIMIT 20 ";
$query = pg_query($conexion,$sql);

$htmli = "";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<option value=".$row["idcliente"]." onclick=\"mostrar('" . $row["razonsocial"] . "')\">" . $row["razonsocial"] ."</option>";
}

echo json_encode($htmli, JSON_UNESCAPED_UNICODE);

