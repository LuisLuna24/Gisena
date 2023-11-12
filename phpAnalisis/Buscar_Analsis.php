<?php
include "../php/conexion.php";

$Tipo = $_POST['tipo'];

$sql="SELECT DISTINCT MAX(idversion) idversion, idmuestra,  analisis.idanalisis AS Analisisid, abreviatura,descripcion_espanol from muestranalisis inner join analisis on muestranalisis.idanalisis=analisis.idanalisis where muestranalisis.idlaboratorio=$Tipo GROUP BY idmuestra, Analisisid,abreviatura LIMIT 30";
$result=pg_query($conexion,$sql);

$cadena="<select id='Analisis' name='Analisis' class='Datos_Pedido'>
<option value='0'>Selecione Analisis</option>";

while ($ver=pg_fetch_row($result)) {         
    $cadena=$cadena.'<option class="Opciones_Tipo" value='.$ver[2].'>'.utf8_encode($ver[3]).' - '.utf8_encode($ver[4]).'</option>';
}
echo  $cadena."</select>";

?>