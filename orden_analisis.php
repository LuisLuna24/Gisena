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
    <link rel="stylesheet" href="css/orden_analisis.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Alerta.css">
    <link rel="stylesheet" href="Librerias/css/select2.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="Librerias/select2.js"></script>
    <title>Analisis solicitado</title>
</head>
<body>
    <header class="header">
        <a href="#" class="name"><img class="logo_gis" src="img/Gsmall.webp" alt=""></a>
        <input type="checkbox" id="check">
        <label for="check" class="menu">
            <i class="bx bx-menu" id="icon-menu"><img class="bx" src="img/menuahambuegesa.webp"></i>
            <i class="bx bx-x" id="close-menu"><img class="bx" src="img/menuahambuegesa.webp"></i>
        </label>
        <nav class="navbar">
            <a href="https://gisenalabs.com.mx/">Conocenos</a>
            <a href="Orden_Servicio.php">Nuevo Análisis</a>
            <a href="Mis_Analisis.php">Mis Análisis</a>
            <a href="php/Cerrar.php">Salir</a>
        </nav>

    </header>

    <section class="analisis">
        <div class="analisis_contenedor">
            <form id="analisis_form" class="analisi_form">
                <div class="analisis_titulo">
                    <h1>Analisis solicitado</h1>
                    <div class="linea_titulo"></div>
                </div>

                <div class="analisis_datos">
                    <label for="lab">Laboratorio:</label>
                    <Select id="Lista_Laboratorio" name="Lista_Laboratorio"></Select>
                </div>

                <div class="analisis_datos">
                    <label for="analisis">Analisis:</label>
                    <Select id="Lista_Analisis" name="Lista_Analisis"></Select>
                </div>
                <div class="analisis_boton">
                    <input type="button" value="Agregar analisis" id="Agregar_Analisis">
                    <input type="button" value="Actualizar tabla" id="Actualizar_Tabla">
                </div>

                <div class="analisis_tabla">
                    <table>
                        <thead>
                            <tr>
                                <th>Clave</th>
                                <th>Analisis</th>
                                <th>Norma</th>
                                <th>Unidad</th>
                                <th>Laboratorio</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="analisis_tabla">

                        </tbody>
                    </table>
                </div>
                <div class="analisis_boton">
                    <input type="button" value="Registar Análisis" id="Registrar_Analisis">
                    <input type="button" value="Cancelar Anànalisis" id="Cancelar">
                </div>

            </form>
        </div>
        <div class="Alerta" id="Alerta_Cancelar">
            <div class="Alerta_Contenedor">
                <div class="Alerta_Titulo">
                    <h2 id="Titulo_Alerta" >! Alerta ¡</h2>
                    <label id="Label_Alerta_Cancelar" for="Registro"></label>
                </div>
                <div class="Alerta_Boton">
                    <input type="button" value="Aceptar" id="Cancelar_Analisis">
                    <input type="button" value="Cancelar" id="Continuar_Analisis">
                </div>
            </div>
        </div>
        <div class="Alerta" id="Alerta_Exito">
            <div class="Alerta_Contenedor">
                <div class="Alerta_Titulo">
                    <h2 id="Titulo_AlertaExito" >! Alerta ¡</h2>
                    <label id="Label_Alerta_CancelarExito" for="Registro"></label>
                </div>
                <div class="Alerta_Boton">
                    <input type="button" value="Aceptar" id="Cancelar_Regresar">
                </div>
            </div>
        </div>
    </section>
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

<script src="jsAnalisis/Buscar_Laboratorio.js"></script>
<script src="jsAnalisis/Buscar_Analisis.js"></script>
<script src="jsAnalisis/Agregar_Analisis.js"></script>
<script src="jsAnalisis/Cancelar_Analisis.js"></script>

<?php  }  ?>