<?php
include "conexion.php";

$salida = "";

$q = isset($_POST['consulta']) ? pg_escape_string($conexion,$_POST['consulta']) : null;

$querry = "SELECT * FROM poductos where tipo >0 and  Nombre ILIKE '%".$q."%' LIMIT 10 ;";


$resultado = pg_query($conexion,$querry);

$num_rows=pg_num_rows($resultado);

if($num_rows >0){
    while($fila = pg_fetch_assoc($resultado)){
        $salida.="<tr>
        <td>".$fila['nombre']."</td>
        <td>$".$fila['pesio']."</td>
        <td>".$fila['ancho']."</td>
        <td>".$fila['largo']."</td>
        </tr>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
