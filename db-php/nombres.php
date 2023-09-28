<?php
include "conexion.php";



$Tipo =  $_POST['tipo'];

if($Tipo!=''){
    $Tipo=$_POST['tipo'];
}else{
    $Tipo='0';
}

$sql="SELECT id_Productos,Tipo,Nombre FROM poductos where tipo =$Tipo";


$result=pg_query($conexion,$sql);

$cadena="<select id='lista2' name='lista2' class='Agregar_Datos'>";

    while ($ver=pg_fetch_row($result)) {
                
        $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
    }
        
    echo  $cadena."</select>";
?>