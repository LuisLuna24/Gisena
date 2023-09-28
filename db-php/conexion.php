<?php 
$host = 'localhost';
$user = 'postgres';
$password = 'Hmcnjsa1*.';
$dbname = 'luma';

$conexion = pg_connect("host=$host dbname=$dbname user=$user password=$password");
if (!$conexion) {
    die("Error al conectar a la base de datos");
}

?>