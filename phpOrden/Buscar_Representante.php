<?php
require "../php/conexion.php";

$BuscarRepresentante = "SELECT MAX(idversion) version_rep ,representante.idrepresentante AS representante,nombre.descripcion AS Nombre1, apellido.descripcion AS Apellido1 FROM public.representante inner join nombre on representante.idnombre=nombre.idnombre
inner join apellido on representante.apaterno=apellido.idapellido GROUP BY idrepresentante,nombre.descripcion,apellido.descripcion ORDER BY nombre1 ASC";


$resultado = pg_query($conexion,$BuscarRepresentante);

?>