<?php
ob_start();
session_start();
$id_Usuario=$_SESSION['id_usuario'];
if($id_Usuario=="" || $id_Usuario==null){
    header("location:index.html");
}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Principal.css">
</head>
<body>
    <header>
        <div class="Header_Contenedor">
            <div class="Header_Logo">
                <img class="Footer_Img" src="img/Gsmall.webp" alt="">
            </div>
            <nav class="Header_Menu">
                <ul>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="">Nuevo Análisis</a></li>
                    <li><a href="">Mis Análisis</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!--=============================================-->
    <section class="Menu">
        <div class="Menu_Contenedor">
            <h1>Análisis</h1>
            <div class="Menu_Navegador">
                <div class="Menu_Opciones">
                    <h2>Conocenos</h2>
                    <img src="img/Gsmall.webp" alt="">
                    <input type="button" value="Conocenos">
                </div>
                <div class="Menu_Opciones">
                    <h2>Nuevo Análisis</h2>
                    <img src="img/Ilustracion1.webp" alt="">
                    <input type="button" value="Nuevo Análisis">
                </div>
                <div class="Menu_Opciones">
                    <h2>Mis Análisis</h2>
                    <img src="img/Ilustracion2.webp" alt="">
                    <input type="button" value="Mis Análisis">
                </div>
            </div>
        </div>
    </section>
    <!--=============================================-->
    <footer calss="Footer">
        <div class="Fotter_Contenedor">
            <div class="Footer_Logo">
                <img  src="img/Smallfooterlogo.webp" alt="">
                <label for="Copyright">Gisenalabs® Todos los derechos reservados</label>
            </div>
        </div>
    </footer>
    
</body>
</html>

<?php } ?>