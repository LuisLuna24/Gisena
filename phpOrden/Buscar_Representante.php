<?php
include "../php/conexion.php";

$salida = "<option class='Opciones_Tipo' value='0'>Seleccionar Representante</option>";

$querry = "SELECT MAX(idversion) version_rep ,representante.idrepresentante AS representante,nombre.descripcion AS Nombre1, apellido.descripcion AS Apellido1 FROM public.representante inner join nombre on representante.idnombre=nombre.idnombre
inner join apellido on representante.apaterno=apellido.idapellido GROUP BY idrepresentante,nombre.descripcion,apellido.descripcion ORDER BY nombre1 ASC";


$resultado = pg_query($conexion,$querry);
$num_rows = pg_num_rows($resultado);

if($num_rows >0){
    while($fila = pg_fetch_assoc($resultado)){
        $salida.="<option class='Opciones_Tipo' value='".$fila['representante']."'>".$fila['nombre1']." ".$fila['apellido1']."</option>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
?>