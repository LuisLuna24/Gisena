<?php

require '../php/conexion.php';


$campo = $_POST["lista_Clientes"];

$sql = "SELECT MAX(idversion) version_direc ,tel_numero FROM public.cliente where idcliente = '$campo' GROUP BY tel_numero LIMIT 10 ";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_assoc($query)) {
    $html .= "<option values='".$row["tel_numero"]."'>" . $row["tel_numero"] ."</option>";
}

echo $html;