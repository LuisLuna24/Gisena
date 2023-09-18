<?php
include "conexion.php";

$sql="SELECT * FROM productos";
$result=mysqli_query($conexion,$sql);

while($dat=mysqli_fetch_assoc($result)){
    $arr[]=$dat;
}

echo json_encode($arr);




?>