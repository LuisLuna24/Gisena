<?php
include "../php/conexion.php";

$salida = "";

$querry = "SELECT * FROM repidioma";


$resultado = pg_query($conexion,$querry);
$num_rows = pg_num_rows($resultado);

if($num_rows >0){
    while($fila = pg_fetch_assoc($resultado)){
        $salida.="<option class='Opciones_Tipo' value='".$fila['ididioma']."'>".$fila['descripcion']."</option>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
?>