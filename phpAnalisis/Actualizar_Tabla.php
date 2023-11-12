<?php
include "../php/conexion.php";
$salida = "";
session_start();

$muestracodigo=$_SESSION['claveidentificacion'];

$sql="SELECT abreviatura,descripcion_espanol,analisis.idnormativa AS idnormativa , ordenserviciomuestranalisis.idlaboratorio as idlaboratorio, analisis.idunidadmed as idunidadmed  FROM  ordenserviciomuestranalisis INNER JOIN analisis on  ordenserviciomuestranalisis.idanalisis=analisis.idanalisis where muestracodigo = '$muestracodigo'";
$result=pg_query($conexion,$sql);



$num_rows = pg_num_rows($result);

if($num_rows !=0){
    while($fila = pg_fetch_array($result)){
        $salida.="<tr>
        <td>".$fila['abreviatura']."</td>
        <td>".$fila['descripcion_espanol']."</td>
        <td>".$fila['idnormativa']."</td>
        <td>".$fila['idunidadmed']."</td>
        <td>".$fila['idlaboratorio']."</td>
        <td>Eliminar</td>
        </tr>";
    }
}else {
    $salida="<td>Sin Analisis</td>";
}

echo $salida;

?>