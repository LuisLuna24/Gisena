<?php

require "../php/conexion.php";
session_start();

$Orden=$_SESSION['ordentrabajo'];

$BuscarOrden="SELECT * FROM ordenservicio where ordentrabajo = '$Orden'";
$queryBuscar=pg_query($conexion,$BuscarOrden);
$num_row_b=pg_num_rows($queryBuscar);

if($num_row_b==1){
    $EliminarAnalisis="DELETE FROM public.ordenserviciomuestranalisis WHERE ordencodigo = '$Orden';";
    pg_query($EliminarAnalisis);

    $Eliminarlab="DELETE FROM public.ordenserviciomuestralab WHERE ordencodigo = '$Orden';";
    pg_query($Eliminarlab);


    $EliminarIdentificacion="DELETE FROM public.ordenservicioidentificacion WHERE ordencodigo = '$Orden';";
    pg_query($EliminarIdentificacion);


    $EliminarMuestra="DELETE FROM public.ordenserviciomuestra WHERE ordencodigo = '$Orden';";
    pg_query($EliminarMuestra);

    $Eliminarmisnalisis="DELETE  FROM misanalisis where ordencodigo = '$Orden';";
    pg_query($Eliminarmisnalisis);


    $Eliminar="DELETE FROM public.ordenservicio WHERE ordentrabajo = '$Orden';";
    pg_query($Eliminar);

    echo 1;
}else{
    echo 2;
}


?>