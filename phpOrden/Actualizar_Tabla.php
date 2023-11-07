<?php
include "conexion.php";
$salida = "";

$tablabus=$_POST["Orden_Trabajo"];

$sql="SELECT * FROM  public.ordenserviciomuestra where ordencodigo = '$tablabus'";
$result=pg_query($conexion,$sql);

$num_rows = pg_num_rows($result);

if($num_rows !=0){
    while($fila = pg_fetch_array($result)){
        $salida.="<tr>
        <td>".$fila['claveidentificacion']."</td>
        <td>".$fila['identificacioncliente']."</td>
        <td>".$fila['fechamuestra']."</td>
        <td>".$fila['cantidad']."</td>
        <td>".$fila['lote']."</td>
        <td>".$fila['fechaenvio']."</td>
        <td>Actualizar</td>
        <td>Eliminar</td>
        </tr>";
    }
}else {
    $salida="No hay analizis";
}

echo $salida;

?>