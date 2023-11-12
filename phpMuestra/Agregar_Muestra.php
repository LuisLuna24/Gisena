<?php
require '../php/conexion.php';
session_start();


$suma= $_SESSION['ordentrabajo'];
$ordencodigo=$suma;

$d3="SELECT MAX(idclaveidentificacion) idclaveidentificacion  From ordenserviciomuestra where ordencodigo='$ordencodigo'";
$res=pg_query($conexion,$d3);
$srt=pg_fetch_assoc($res);
$idclave=$srt['idclaveidentificacion']+1;

$claveidentificacion=$suma."_".$idclave;
$_SESSION['claveidentificacion']=$claveidentificacion;


if(isset($_POST['Muestra_Mensajeria'])){
        $mensajeria=$_POST['Muestra_Mensajeria']; 
}else{
        $mensajeria="null";
}
if(isset($_POST['Mensajeria_Guia'])){
        $guia=$_POST['Mensajeria_Guia']; 
}else{
        $guia='Null';
}
$urgencia=$_POST['Muestra_Urgencia'];
$idioma=$_POST['Muestra_Idioma'];

$muestra=$_POST['Muestra_Muestra'];
$_SESSION['muestra']=$muestra;

$cantidad=$_POST['Muestra_Cantidad'];
$unidad=$_POST['Muestra_Unidad'];

$fechamues=$_POST['Fecha_Muestra'];
$fmuestreo= date("Y-m-d", strtotime($fechamues));

$fechaen=$_POST['Fechaa_Envio'];
$fenvio= date("Y-m-d", strtotime($fechaen));

$fechaInput=$_POST['Fecha_Caducidad'];
$fcaducidad= date("Y-m-d", strtotime($fechaInput));

$fechaInput2=$_POST['Fecha_Empaque'];
$fempaque= date("Y-m-d", strtotime($fechaInput2));

$lote=$_POST['Muestra_Lote'];
$ittem=$_POST['Muestra_Item'];
$tif=$_POST['Muestra_Tif'];

$procedencia=$_POST['Muestra_Procedencia'];
$nombreproce=$_POST['Muestra_Nombre'];
$municipio=$_POST['Muestra_Municipio'];
$estado=$_POST['Muestra_Estado'];
$cp=$_POST['Muestra_CP'];

$descripcion_cliente=$_POST['Muestra_Descripcion'];
$otros_datos=$_POST['Muestra_OtrosDatos'];

if(isset($_POST['Mensajeria_Check'])){
        $conmensajeria=$_POST['Mensajeria_Check'];
}else{
        $conmensajeria='0';
}


$noversion=1;
$_SESSION['noversion']=$noversion;

$ordenversion=1;
$_SESSION['ordenversion']=$ordenversion;



try{
        $Consulta="INSERT INTO ordenserviciomuestra(ordencodigo, ordenversion, claveidentificacion, idclaveidentificacion, noversion, estatus, idurgencia, disponible, conetiqueta, noetiqueta, nacional, internacional, idmuestra, fechamuestra, fechacaducidad, cantidad, lote, fechaenvio, conmensajeria, idmensajeria, noguia, noidentificacion, idprocedencia, lugar, idciudad, idcodigopostal, otrosdatos, wmid, tif, fechaempaque, identificacioncliente, idunidad,fecharegistro, horaregistro) VALUES
        ('$ordencodigo','$ordenversion','$claveidentificacion','$idclave','$noversion','Captura','$urgencia','0','0','0','1','0','$muestra','$fmuestreo','$fcaducidad','$cantidad','$lote','$fenvio','$conmensajeria',$mensajeria,'$guia','$cantidad','$procedencia','$nombreproce','$estado','$cp','$otros_datos','$ittem','$tif','$fempaque','$descripcion_cliente','$unidad',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $query=pg_query($conexion,$Consulta);
        echo 1;
}catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>