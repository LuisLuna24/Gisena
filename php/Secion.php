<?php

include "conexion.php";
include "encriptado.php";
session_start();

$Correo=$_POST['Correo'];
$ContraseñaDes=$_POST['Contraseña'];
$Contraseña=$encriptar($ContraseñaDes);

try {
    $BuscarCorreo= "SELECT correo FROM regisusuario where correo = '$Correo'";
    $queryCorreo=pg_query($conexion,$BuscarCorreo);
    $num_Correo=pg_num_rows($queryCorreo);
    if($num_Correo==1){
        $BuscarContraseña="SELECT * FROM regisusuario where  correo = '$Correo' and contrasena = '$Contraseña'";
        $queryContraseña=pg_query($conexion,$BuscarContraseña);
        $num_Contraseña=pg_num_rows($queryContraseña);
        if($num_Contraseña==1){
            $rowSession=pg_fetch_assoc($queryContraseña);
            $_SESSION['id_usuario']=$rowSession['idregisusuario'];
            $_SESSION['Nombre']=$rowSession['nombre'];
            $_SESSION['correo']=$rowSession['correo'];
            echo 1;
        }else{
            echo 2;
        }
    }else{
        echo 3;
    }
} catch (Exception $th) {
    echo $th;
}


?>