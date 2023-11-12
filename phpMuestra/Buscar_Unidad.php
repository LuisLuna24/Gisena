<?php

require '../php/conexion.php';


$campo = $_POST["Muestra_Muestra"];

$sql = "SELECT MAX(idversion) version_unidad,unidad.idunidad AS id_unidad ,descripcion,abreviatura FROM muestra inner join unidad on muestra.idunidad=unidad.idunidad where idmuestra = '$campo' GROUP BY id_unidad,descripcion,abreviatura";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_array($query)) {
	$html .= "<option value=".$row["id_unidad"].">".$row["abreviatura"]."</option>";
}

echo $html;

?>