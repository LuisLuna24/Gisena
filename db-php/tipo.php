<?php
include "conexion.php";

$salida = "";

$q = isset($_POST['consulta']) ? $conexion->real_escape_string($_POST['consulta']) : null;

$querry = "SELECT * FROM tipo where Nombre LIKE '%".$q."%';";


$resultado = $conexion->query($querry);
$num_rows = $resultado->num_rows;

if($num_rows >0){
    while($fila = $resultado->fetch_assoc()){
        $salida.="<option class='Opciones_Tipo' value=".$fila['id_Tipo'].">".$fila['Nombre']."</option>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
?>