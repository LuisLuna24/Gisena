<?php
ob_start();
session_start();
$id_Usuario=$_SESSION['id_usuario'];
$Nombre=$_SESSION['Nombre'];
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
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <header>
        <div class="back">
            <div class="menu container">
                <a href="#" class="logo"><img class="logo_gis" src="img/Gsmall.webp" alt=""></a>
                <input type="checkbox" id="menu">
                <label for="menu">
                    <img src="img/menuahambuegesa.webp" alt="" class="menu-icono">
                </label>
                <nav class="Navbar">
                    <ul>
                        <li><a href="https://gisenalabs.com.mx/">Conocenos</a></li>
                        <li><a href="Orden_Servicio.php">Nuevo Análisis</a></li>
                        <li><a href="Mis_Analisis.php">Mis Análisis</a></li>
                        <li><a href="php/Cerrar.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!--=============================================-->
    <section class="Menu">
        <div class="Menu_Contenedor">
            <h1>Bienvenido <?php  echo $Nombre ?></h1>
            <div class="Menu_Navegador ">
                <div class="Menu_Opciones Menu_Conocenos">
                    <h2>Conocenos</h2>
                    <img src="img/Gsmall.webp" alt="">
                    <input type="button" value="Conocenos" id="Conocenos">
                </div>
                <div class="Menu_Opciones Menu_Nuevo">
                    <h2>Nuevo Análisis</h2>
                    <img src="img/Ilustracion1.webp" alt="">
                    <input type="button" value="Nuevo Análisis" id="Nuevo_Analisis">
                </div>
                <div class="Menu_Opciones Menu_Mis">
                    <h2>Mis Análisis</h2>
                    <img src="img/Ilustracion2.webp" alt="">
                    <input type="button" value="Mis Análisis" id="Mis_Analsis">
                </div>
            </div>
        </div>
        <div class="Alerta" id="Alerta_Analisis">
            <div class="Alerta_Contenedor">
                <div class="Alerta_Titulo">
                    <h2>! Upss... ¡</h2>
                    <label id="Label_Alerta_Secion" for="Registro"></label>
                </div>
                <div class="Alerta_Boton">
                    <input type="button" value="Aceptar" id="Alerta_btn_Secion">
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


<script src="js/Direccionar.js"></script>
<script src="js/Nuevo_Analisis.js"></script>

<?php } ?>