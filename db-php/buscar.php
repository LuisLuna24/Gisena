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
        <td>".$fila['Tipo']."</td>
        <td>".$fila['Pesio']."</td>
        <td>".$fila['Ancho']."</td>
        <td>".$fila['Largo']."</td>
        </tr>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
