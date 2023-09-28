<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Lonas.css">
</head>
<body>
    <?php
    include "db-php/conexion.php";
    $Consulta="SELECT * FROM pedidos";
    $resultado=pg_query($conexion,$Consulta);
    while($row = pg_fetch_row($resultado)){
    ?>
    <div><img src="data:image/png;base64,<?php echo base64_encode($row['imagen']);  ?>"></div>

    <?php
    
    }
    ?>
</body>
</html>