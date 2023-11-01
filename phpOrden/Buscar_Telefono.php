<?php

require '../php/conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT MAX(idversion) version_direc ,tel_numero FROM public.cliente where razonsocial ILIKE '%$campo%' GROUP BY tel_numero LIMIT 10 ";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_array($query)) {
    $html .= "<option onclick=\"mostrarTelefono('" . $row["tel_numero"] . "')\">" . $row["tel_numero"] ."</option>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);