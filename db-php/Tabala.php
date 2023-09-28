<?php
include "conexion.php";

$sql="SELECT * FROM productos where tipo < 0";
$result=pg_query($conexion,$sql);

while($dat=pg_fetch_assoc($result)){
    $arr[]=$dat;
}

echo json_encode($arr);




?>