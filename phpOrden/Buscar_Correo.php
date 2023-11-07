<?php

require '../php/conexion.php';


$campo = $_POST["lista_Clientes"];

$sql = "SELECT MAX(idversion) version_corr , correo FROM public.cliente where idcliente = '$campo' GROUP BY correo LIMIT 10   ";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_array($query)) {
	$html .= "<option value='".$row["correo"]."'>" . $row["correo"] ."</option>";
}

echo $html;