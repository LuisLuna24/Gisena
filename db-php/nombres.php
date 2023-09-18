<?php
include "conexion.php";

$Tipo = $_POST['tipo'];




$sql="SELECT id_Poducto,id_Tipo,Nombre FROM poductos where id_Tipo = '$Tipo'";
$result=mysqli_query($conexion,$sql);

$cadena="<select id='lista2' name='lista2' class='Agregar_Datos'>";

            while ($ver=mysqli_fetch_row($result)) {
                
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
            }
        
            echo  $cadena."</select>";
?>