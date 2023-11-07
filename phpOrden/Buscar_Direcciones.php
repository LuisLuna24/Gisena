<?php

require '../php/conexion.php';


$campo = $_POST["lista_Clientes"];

$sql = "SELECT MAX(idversion) version_direc,domicilio FROM public.cliente where idcliente = '$campo'  GROUP BY domicilio  LIMIT 10 ";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_assoc($query)) {
	$html .= "<option values='".$row["domicilio"]."'>".$row["domicilio"]."</option>";
}

echo $html;

?>