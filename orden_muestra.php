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
    <title>Datos Muestra</title>
    <link rel="stylesheet" href="css/orden_muestra.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Alerta.css">
    <link rel="stylesheet" href="Librerias/css/select2.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="Librerias/select2.js"></script>
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
    <section class="dat_muestra">
        <div class="dat_muestra_contenedor">
            <form class="dat_muestra_form" id="Muestra_Form">
                <div class="dat_muestra_titulo">
                    <h1>Datos de Muestra</h1>
                    <div class="linea_titulo"></div>
                </div>

                <div class="dat_datos">
                    <div class="Fecha_datos">
                        <div class="Mensajeria">
                            <div class="Mensajeria_Check">
                                <input type="checkbox" id="Mensajeria_Check" name="Mensajeria_Check" value="1">
                                <label for="Mensajeria">Mensajeria:</label>
                            </div>
                            <select class="Listas_Select" id="Muestra_Mensajeria" name="Muestra_Mensajeria" disabled></select>
                        </div>
                        <div class="datos">
                            <label for="no_guia">No.Guìa:</label>
                            <input type="text" id="Mensajeria_Guia" name="Mensajeria_Guia" disabled>
                        </div>
                    </div>
                    <div class="Fecha_datos">
                        <div class="dat">
                            <label for="urg">Urgencia:</label>
                            <select class="Listas_Select" id="Muestra_Urgencia" name="Muestra_Urgencia"></select>
                        </div>
                        <div class="dat">
                            <label for="idiom">Idioma:</label>
                            <select class="Listas_Select" id="Muestra_Idioma" name="Muestra_Idioma"></select>
                        </div>
                    </div>

                    <div class="dat">
                        <label for="muest">Muestra:</label>
                        <select class="Listas_Select" id="Muestra_Muestra" name="Muestra_Muestra"></select>
                    </div>

                    <div class="Fecha_datos">
                        <div class="dato">
                            <label for="cant">Cantidad:</label>
                            <input type="text" name="Muestra_Cantidad">
                        </div>
                        <div class="dato">
                            <label for="uni">Unidad:</label>
                            <select class="Listas_Select" id="Muestra_Unidad" name="Muestra_Unidad"></select>
                        </div>
                    </div>

                    <div class="Fecha_datos">
                        <div class="dattos">
                            <label for="fech_m">Fecha de muestreo:</label>
                            <input type="date" name="Fecha_Muestra">
                        </div>
                        <div class="dattos">
                            <label for="fech_e">Fecha de envio:</label>
                            <input type="date" name="Fechaa_Envio">
                        </div>
                    </div>

                    <div class="Fecha_datos">
                        <div class="datoos">
                            <label for="fech_c">Fecha de caducidad:</label>
                            <input type="date" name="Fecha_Caducidad">
                        </div>
                        <div class="datoos">
                            <label for="fech_em">Fecha de empaquetado:</label>
                            <input type="date" name="Fecha_Empaque">
                        </div>
                    </div>

                    <div class="dat">
                        <label for="lot">Lote:</label>
                        <input type="text" name="Muestra_Lote">
                    </div>

                    <div class="Fecha_datos">
                        <div class="d1">
                            <label for="item">ITEM:</label>
                            <input type="text" name="Muestra_Item">
                        </div>
                        <div class="d1">
                            <label for="tif">TIF:</label>
                            <input type="text" name="Muestra_Tif">
                        </div>
                    </div>
                </div>
                <div class="Procedencia">
                    <div class="Procedencia_Titulo">
                        <div class="Procedencia_H">
                            <h1>Procedencia</h1>
                        </div>
                        <div class="linea_titulo"></div>
                    </div>
                    <div class="Ocultar">
                        <div class="Procedencia_Contenedor">
                            <div class="Procedencia_Datos">
                                <label for="Procedencia">Procedencia:</label>
                                <select class="Listas_Select" id="Muestra_Procedencia" name="Muestra_Procedencia"></select>
                            </div>
                            <div class="Procedencia_Datos">
                                <label for="Procedencia">Nombre:</label>
                                <input type="text" name="Muestra_Nombre">
                            </div>
                            <div class="Procedencia_Datos">
                                <label for="Procedencia">Municipio:</label>
                                <input type="text" name="Muestra_Municipio">
                            </div>
                            <div class="Procedencia_DatosC">
                                <div class="Dato_Procedencia">
                                    <label for="Procedencia">Estado:</label>
                                    <select class="Listas_Select" id="Muestra_Estado" name="Muestra_Estado"></select>

                                </div>
                                <div class="Dato_Procedencia">
                                    <label for="Procedencia">CP:</label>
                                    <select class="Listas_Select" id="Muestra_CP" name="Muestra_CP"></select>
                                </div>
                            </div>
                            <div class="Procedencia_Datos">
                                <label for="Procedencia">Descripcion del cliente:</label>
                                <input type="text" name="Muestra_Descripcion">
                            </div>
                            <div class="Procedencia_Datos">
                                <label for="Procedencia">Otros datos:</label>
                                <textarea cols="30" rows="10" name="Muestra_OtrosDatos"></textarea>
                            </div>
                        </div>

                    </div>
                    
                </div>

                <div class="botones">
                    <input type="button" value="Registrar muestra" id="Agregar_Muestra">
                    <input type="button" value="Cancelar muestra" id="Cancelar_Muestra">
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
                    <input type="button" value="Aceptar" id="Cancelar_MuestraAlerta">
                    <input type="button" value="Cancelar" id="Continuar_Muestra">
                </div>
            </div>
        </div>

        <div class="Alerta" id="Alerta_CancelarExito">
            <div class="Alerta_Contenedor">
                <div class="Alerta_Titulo">
                    <h2 id="Titulo_Alerta" >! Exito ¡</h2>
                    <label id="Label_Alerta_Exito" for="Registro"></label>
                </div>
                <div class="Alerta_Boton">
                    <input type="button" value="Aceptar" id="Regresar_Orden">
                </div>
            </div>
        </div>


    </section>
    <footer calss="Footer">
        <div class="Fotter_Contenedor">
            <div class="Footer_Logo">
                <img src="img/Smallfooterlogo.webp" alt="">
                <label for="Copyright">Gisenalabs® Todos los derechos reservados</label>
            </div>
        </div>
    </footer>
</body>

</html>

<script src="jsMuestra/Buscar_Mensajeria.js"></script>
<script src="jsMuestra/Buscar_DatosMuestra.js"></script>
<script src="jsMuestra/Mostarar_Procedencia.js"></script>
<script src="jsMuestra/Buscar_Procedencia.js"></script>
<script src="jsMuestra/Agregar_Muestra.js"></script>
<script src="jsMuestra/Alertas_Muestra.js"></script>
<script src="jsMuestra/Cancelar_Muestra.js"></script>

<?php  }  ?>