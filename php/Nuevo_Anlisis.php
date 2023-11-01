<?php
require "conexion.php";

session_start();
$id_Usuario=$_SESSION['id_usuario'];
$d1="0";
$d2=23000000;
$d3="SELECT MAX(idordentrabajo) idordentrabajo  From ordenservicio";
$res=pg_query($conexion,$d3);
$num_R=pg_num_rows($res);
if($num_R!=0){
    $srt=pg_fetch_assoc($res);
    $suma= $d1.$srt['idordentrabajo']+$d2+1;
    $resp=$srt['idordentrabajo']+1;

    $orden="INSERT INTO public.ordenservicio(ordentrabajo, idordentrabajo, noversion) 
        VALUES ('$suma','$resp', '1');";
    $res2=pg_query($conexion,$orden);

    $mianalisis="INSERT INTO misanalisis(id_mianalisis, id_cliente, ordencodigo, idorden, noveersion)
        VALUES ('$resp', '$id_Usuario', '$suma', '$resp', '1');";
    $querymi=pg_query($conexion,$mianalisis);

    $_SESSION['ordentrabajo']=$suma;

    echo 1;
}else{
    echo 2;
}




?>