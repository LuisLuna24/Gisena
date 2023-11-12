<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orden_cliente.css">
    <title>Control del Cliente</title>
</head>

<body>
    
    <section class="control">
        <div class="control_contenedor">
            <form class="control_form">
                <div class="control_titulo">
                    <h1>Control del cliente</h1>
                    <div class="linea_titulo"></div>
                </div>

                <div class="control_datos">
                    <div class="control_iden">
                        <label for="cont">Identificacion:</label>
                        <select></select>
                    </div>

                    <div class="datos">
                        <div class="dato1">
                            <label for="cant">Cantidad:</label>
                            <select name="" id=""></select>
                        </div>

                        <div class="dato">
                            <label for="vari">Variedad:</label>
                            <select name="" id=""></select>
                        </div>
                    </div>

                    <div class="datos">
                        <div class="dato1">
                            <label for="num_lot">Num.Lote:</label>
                            <select name="" id=""></select>
                        </div>
                        <div class="dato2">
                            <label for="no_regi">No.Registro:</label>
                            <select name="" id=""></select>
                        </div>
                    </div>
                </div>

                <div class="control_botones">
                    <input type="submit" value="Agregar control">
                    <input type="submit" value="Actualizar">
                </div>

                <div class="CONTROL_tabla">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IDENTIFICACION</th>
                                <th>CANTIDAD</th>
                                <th>VARIEDAD</th>
                                <th>NUM.LOTE</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="control_botones">
                    <input type="submit" value="Terminar muestra">
                </div>
            </form>
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