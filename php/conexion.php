<?php 

$host = 'localhost';
$user = 'postgres';
$password = 'Hmcnjsa1*.';
$dbname = 'pruebagis';

$conexion = pg_connect("host=$host dbname=$dbname user=$user password=$password");
if (!$conexion) {
    die("Error al conectar a la base de datos");
}


/*
$host = '192.168.69.2';
$user = 'gisenabd';
$password = '12345678';
$dbname = 'pruebagis';

$conexion = pg_connect("host=$host dbname=$dbname user=$user password=$password");
if (!$conexion) {
    die("Error al conectar a la base de datos");
}
*/
?>