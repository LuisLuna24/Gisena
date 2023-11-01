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

    <Section class="Orden">
        <div class="Orden_Contenedor">
            <form class="Ornden_Form">
                <div class="Orden_Titulo">
                    <h1>Orden de Servicio</h1>
                    <div class="Linea_Titulo"></div>
                </div>
                <div class="Orden_Datos">
                    <div class="Orden_Numero">
                        <div class="Orden_NumeroSercicio">
                            <label for="No.Servicio">Número de orden de servicio:</label>
                            <input type="text" value="<?php echo $_SESSION['ordentrabajo']; ?>" disabled>
                        </div>
                        <div class="Orden_NumeroSercicio">
                            <label for="No.Servicio">Fecha:</label>
                            <input type="date" id="Fecha_Orden" disabled>
                        </div>
                    </div>
                    <div class="Orden_Cliente">
                        <div class="OrdenDireccion">
                            <label for="direccion">Cliente:</label>
                            <input type="text" id="Orden_Cliente">
                            <datalist class="Lista_Clientes" id="lista_Clientes"></datalist>
                        </div>
                        <div class="OrdenDireccion">
                            <label for="direccion">Razón social:</label>
                            <input type="text" id="Orden_Razon">
                        </div>
                        <div class="OrdenDireccion">
                            <label for="direccion">Dirección:</label>
                            <input type="text" id="Orden_Direcciones">
                            <datalist class="Lista_Clientes" id="lista_Direccion"></datalist>                         
                        </div>
                    </div>
                    <div class="Orden_Contacto">
                        <div class="Orden_Tel">
                            <label for="contacto">Telefono</label>
                            <input type="text" id="Orden_Telefono">
                            <datalist class="Lista_Clientes" id="lista_Telefono"></datalist>                         
                        </div>
                        <div class="Orden_Tel">
                            <label for="contacto">Correo</label>
                            <input type="text" id="Orden_Correo">
                            <datalist class="Lista_Clientes" id="lista_Correo"></datalist> 
                        </div>
                    </div>
                    <div class="Orden_Representante">
                        <div class="check_Representante">
                            <input type="checkbox" id="Check_Representante">
                            <label for="representante">Reprecentante:</label>
                        </div>
                        <div class="Representante">
                            <input list="lista_Representante" type="text" id="Orden_Representante" disabled>
                            <datalist class="Lista_Clientes" id="lista_Representante"></datalist> 
                        </div>
                    </div>
                    <div class="Orden_Nuevo">
                        <input type="button" value="Agregar análisis">
                        <input type="button" value="Actualizar tabla">
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
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="Orden_Botones">
                        <input type="button" value="Enviar">
                        <input type="button" value="Calncelar">
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

<?php  }  ?>