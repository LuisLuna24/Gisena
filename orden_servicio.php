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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Orden_Servicio.css">
    <link rel="stylesheet" href="css/header.css">
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

    <!--=============================================-->

    <Section class="Orden">
        <div class="Orden_Contenedor">
            <form class="Ornden_Form" id="Orden_Form">
                <div class="Orden_Titulo">
                    <h1>Orden de Servicio</h1>
                    <div class="Linea_Titulo"></div>
                </div>
                <div class="Orden_Datos">
                    <div class="Orden_Numero">
                        <div class="Orden_NumeroSercicio">
                            <label for="No.Servicio">Número de orden de servicio:</label>
                            <input type="text" value="<?php echo $_SESSION['ordentrabajo']; ?>" id="Orden_Trabajo" name="Orden_Trabajo" readonly>
                        </div>
                        <div class="Orden_NumeroSercicio">
                            <label for="No.Servicio">Fecha:</label>
                            <input type="date" id="Fecha_Orden" name="Orden_Fecha" readonly>
                        </div>
                    </div>
                    <div class="Orden_Cliente">
                        <div class="OrdenDireccion">
                            <label for="direccion">Razon Social:</label>
                            <select class="Lista_Clientes" id="lista_Clientes" name="Orden_Clientes"></select>
                        </div>
                        <div class="OrdenDireccion">
                            <label for="direccion">Dirección:</label>
                            <select class="Lista_Clientes" id="lista_Direccion" name="Orden_Direccion"></select>                         
                        </div>
                    </div>
                    <div class="Orden_Contacto">
                        <div class="Orden_Tel">
                            <label for="contacto">Telefono</label>
                            <select class="Lista_Clientes" id="lista_Telefono" name="Orden_Telefono"></select>                         
                        </div>
                        <div class="Orden_Tel">
                            <label for="contacto">Correo</label>
                            <select class="Lista_Clientes" id="lista_Correo" name="Orden_Correo"></select> 
                        </div>
                    </div>
                    <div class="Orden_Representante">
                        <div class="check_Representante">
                            <input type="checkbox" id="Check_Representante">
                            <label for="representante">Reprecentante:</label>
                        </div>
                        <div class="Representante">
                            <Select class="Lista_Clientes" id="Lista_Representante" name="Orden_Representante" disabled></Select> 
                        </div>
                    </div>
                    <div class="Orden_Nuevo">
                        <input type="button" value="Agregar análisis" id="Agregar_Orden">
                        <input type="button" value="Actualizar tabla" id="Actualizar">
                    </div>
                    <div class="Orden_Tabla">
                        <table>
                            <thead>
                                <tr>
                                    <th>Clave</th>
                                    <th>Muestra</th>
                                    <th>Fecha Muestra</th>
                                    <th>Cantidad</th>
                                    <th>Lote</th>
                                    <th>Envio</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody id="Tabla_Datos">

                            </tbody>
                        </table>
                    </div>
                    <div class="Orden_Botones">
                        <input type="button" value="Enviar" id="Enviar_Orden">
                        <input type="button" value="Calncelar" onclick="Cancelar_Muestra();">
                    </div>
                </div>
            </form>
        </div>
    </Section>

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


<script src="jsOrden/Scripts.js"></script>
<script src="jsOrden/Buscar_Cliente.js"></script>
<script src="jsOrden/Buscar_Direccion.js"></script>
<script src="jsOrden/Buscar_Telefono.js"></script>
<script src="jsOrden/Buscar_Correo.js"></script>
<script src="jsOrden/Buscar_Representante.js"></script>
<script src="jsOrden/Agregar_Orden.js"></script>

<?php  }  ?>