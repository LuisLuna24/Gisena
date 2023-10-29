<?php
require "conexion.php";
include "encriptado.php";


$idUsuario= rand(1, 1000000);
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$ContraseñaDes=$_POST['Contraseña'];
$Contraseña=$encriptar($ContraseñaDes);

try{
    $idExist="SELECT * FROM regisusuario where idregisusuario = '$idUsuario'";
    $queryid=pg_query($conexion,$idExist);
    $num_id=pg_num_rows($queryid);
    if($num_id==1){
        $idUsuario= rand(1, 1000000);
        return $idUsuario; 
    }else{
        $UsuarioExist="SELECT * FROM regisusuario where correo = '$Correo'";
        $queryExist=pg_query($conexion,$UsuarioExist);
        $num_Exist=pg_num_rows($queryExist);
        if($num_Exist==0){
            $Insert="INSERT INTO regisusuario(idregisusuario, nombre, apellido, telefono, correo, contrasena) values ($idUsuario,'$Nombre','$Apellidos','$Telefono','$Correo','$Contraseña');";
            $queryInsert=pg_query($conexion,$Insert);
            echo 1;
        }else{
            echo 2;
        }
    }
    
}catch(Exception $e){
    echo $e;
}




?>