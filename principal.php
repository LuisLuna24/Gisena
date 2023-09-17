<?php 
ob_start();
    session_start();
    $salida="";
        $varSesion=$_SESSION["usuario"];
        if ($varSesion==''|| $varSesion==null) {
            header("location:index.php");
        }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="css/Principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@100&display=swap" rel="stylesheet">
    <script src="js/Direccionar.js"></script>
</head>
<body>
    <?php require('Global/cabesera.php'); ?>
<!--=======================================Primer Parete=====================================-->
    <Section class="Cabesera">
        <div class="Cabesera_Contenedor">
            <div class="Cabesera_Contenedor_Titulo">
                <img src="img/LumarLogo.png" alt="Logo_Lumar">
                <h1>Bienvenido</h1> 
                <h3>Serigrafia, Estampado, Sublimacion, Diseño digital y Diseño web</h3>
            </div>
        </div>
    </Section>
<!--======================================Segunda Parete=====================================-->
    <Section class="Opciones">
        <div class="Opciones_Contenedor">
            <div class="Opciones_Titulo">
                <h1>Servicios</h1>
            </div>
            
            <div class="Opciones_Card">
                <div class="Card Card1">
                    <img src="img/Pedidos-Cel.png" alt="Logo Pedidos">
                    <h1>Pedidos</h1>
                    <p>Agrega tus pedidos de serigrafia, estampado, sublimacion u otros</p>
                    <input class="Card_Button" type="button" value="Entrar" onclick="Pedidos()">
                </div>
                <div class="Card Card2">
                    <img src="img/Pedidos-Lona.png" alt="Logo Pedidos">
                    <h1>Lonas</h1>
                    <p>Agrega tus pedidos de lonas </p>
                    <input class="Card_Button" type="button" value="Entrar" onclick="Lonas()">
                </div>
                <div class="Card Card3">
                    <img src="img/Pedidos-Productos.png" alt="Logo Pedidos">
                    <h1>Productos</h1>
                    <p>Este apartado es para el administrador</p>
                    <input class="Card_Button" type="button" value="Entrar" onclick="Productos()">
                </div>
                <div class="Card Card4">
                    <img src="img/Pedidos-Especial.png" alt="Logo Pedidos">
                    <h1>Especial</h1>
                    <p>Agrega tus pedidos especiales de serigrafia, estampado, sublimacion u otros</p>
                    <input class="Card_Button" type="button" value="Entrar" onclick="Especial()">
                </div>
                <div class="Card Card5">
                    <img src="img/Pedidos-Digital.png" alt="Logo Pedidos">
                    <h1>Digital</h1>
                    <p>Agrega tus pedidos para uso digital como redes sociales u publicidad digital</p>
                    <input class="Card_Button" type="button" value="Entrar" onclick="Digital()">
                </div>
                <div class="Card Card6">
                    <img src="img/Pedidos-Web.png" alt="Logo Pedidos">
                    <h1>Web</h1>
                    <p>Agrega tus pedidos de diseño web estatico (Limitado)</p>
                    <input class="Card_Button" type="button" value="Entrar" onclick="Web()">
                </div>
            </div>
        </div>
    </Section>
</body>
</html>

<?php  } ?>