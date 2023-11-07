<?php

require "../php/conexion.php";

$NoOrden = $_POST['Orden_Trabajo'];
$FechaOrden=$_POST['Orden_Fecha'];

$ClienteOrden=$_POST['Orden_Clientes'];
$BuscarRazon="SELECT * FROM public.cliente where idcliente = '$ClienteOrden'";
$ResultadoRazon=pg_query($conexion,$BuscarRazon);
$rowsRazon=pg_fetch_assoc($ResultadoRazon);
$RazonOrden=$rowsRazon['razonsocial'];

$DireccionOrden=$_POST['Orden_Direccion'];
$TelefonoOrden=$_POST['Orden_Telefono'];
$CorreoOrden=$_POST['Orden_Correo'];
$OrdenRepresentante=$_POST['Orden_Representante'];
$BuscarRepresentante="SELECT MAX(idversion) version_rep FROM public.representante where idrepresentante = '$OrdenRepresentante'";
$ResultadoRepresentante=pg_query($conexion,$BuscarRepresentante);
$rowsRepresentane=pg_fetch_assoc($ResultadoRepresentante);
$OrdenRepresentanteVersion=$rowsRepresentane['version_rep'];


$comprobar = "SELECT * FROM public.ordenservicio where ordentrabajo = '$NoOrden'";
$ComResultado= pg_query($conexion,$comprobar);
$numrow=pg_num_rows($ComResultado);

if($numrow==1){
	$agregarorden="UPDATE public.ordenservicio SET
		nacional=1, idcliente='$ClienteOrden', internacional=0, fecharegistro=CURRENT_TIMESTAMP, horaregistro=CURRENT_TIMESTAMP ,estaactivo=1 ,nomcliente='$RazonOrden' ,dircliente='$DireccionOrden',emacliente='$CorreoOrden',telcliente='$TelefonoOrden',ridrepresentante='$OrdenRepresentante',ridversion='$OrdenRepresentanteVersion'
		where ordentrabajo='$NoOrden';";
	$respuesta=pg_query($conexion,$agregarorden);
	echo 1;
}else if($numrow!=1){
	echo 2;
}

?>