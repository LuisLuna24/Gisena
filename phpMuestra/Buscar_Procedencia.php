<?php
require '../php/conexion.php';


$campo = $_POST["campo_Proce"];

$sql = "SELECT * FROM public.procedencia LIMIT 10;";
$query=pg_query($conexion,$sql);

$htmli = "<option>Seleccione Procedencia</option>";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<option value=".$row["idprocedencia"].">" . $row["espanol"] ."</option>";
}

echo $htmli;

?>