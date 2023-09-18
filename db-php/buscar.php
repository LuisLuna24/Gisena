<?php
include "conexion.php";

$salida = "";

$q = isset($_POST['consulta']) ? $conexion->real_escape_string($_POST['consulta']) : null;

$querry = "SELECT * FROM poductos where Nombre LIKE '%".$q."%' LIMIT 10;";


$resultado = $conexion->query($querry);
$num_rows = $resultado->num_rows;

if($num_rows >0){
    while($fila = $resultado->fetch_assoc()){
        $salida.="<tr>
        <td>".$fila['id_Tipo']."</td>
        <td>".$fila['Descripcion']."</td>
        <td>".$fila['Precio']."</td>
        <td>".$fila['Tamaño']."</td>
        </tr>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
