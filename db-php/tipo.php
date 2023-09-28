<?php
include "conexion.php";

$salida = "<option class='Opciones_Tipo' value='0'>Seleccione una Opcion</option>";

$q = isset($_POST['consulta']) ? $conexion->pg_escape_string($_POST['consulta']) : null;

$querry = "SELECT * FROM tipo where nombre LIKE '%".$q."%' AND id_tipo>0;";

$resultado = pg_query($conexion,$querry);
$num_rows=pg_num_rows($resultado);

if($num_rows >0){
    while($fila = pg_fetch_assoc($resultado)){
        $salida.="<option class='Opciones_Tipo' value='".$fila['id_tipo']."'>".$fila['nombre']."</option>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
?>