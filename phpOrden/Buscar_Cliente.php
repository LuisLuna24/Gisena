
<?php
include "../php/conexion.php";

$salida = "<option class='Opciones_Tipo' value='0'>Seleccionar Representante</option>";

$querry = "SELECT * FROM public.cliente LIMIT 10";


$resultado = pg_query($conexion,$querry);
$num_rows = pg_num_rows($resultado);

if($num_rows >0){
    while($fila = pg_fetch_assoc($resultado)){
        $salida.="<option value='".$fila["idcliente"]."'>" . $fila["razonsocial"] ."</option>";
    }
}else {
    $salida.="No hay datos";
}

echo $salida;
?>

