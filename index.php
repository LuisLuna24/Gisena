<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<?php require('Global/cabesera.php'); ?> 
    <!--======================= Primer Parte==========================-->
    <section class="Inicio">
        <div class="Inicio_Contenedor">
            <form id="frmLogin" class="Inicio_Formulario">
				<h1>Iniciar</h1>
                <div>
                    <h2>Ususario:</h2>
                    <input class="Inicio_Formulario_Texto" type="text" id="txtUsuario" >
                </div>
                <div>
                    <h2>Contraceña:</h2>
                    <input class="Inicio_Formulario_Texto" type="password" id="txtPassword">
                </div>
				<label id="Error" class="Error">Contraseña o Correo Incorrectos</label>
                <input class="Inicio_Formulario_Boton" type="submit" value="Iniciar" id="btnEntrar">
            </form>
        </div>
    </section>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#btnEntrar').click(function() {
			event.preventDefault();
			
			if ($('#txtUsuario').val() == "") {
				alert("Debes agregar el usuario");
				return false;
			} else if ($('#txtPassword').val() == "") {
				alert("Debes agregar la contraseña");
				return false;
			}

			cadena = "usuario=" + $('#txtUsuario').val() +
				"&password=" + $('#txtPassword').val();

			$.ajax({
				type: "POST",
				url: "db-php/acceso.php",
				data: cadena,
				success: function(data) {
					console.log(data);
					if (data == 1) {
						$(location).attr('href', 'principal.php');
					} else if (data == 2) {
						document.getElementById("Error").style.display = "block";
						$('#frmLogin')[0].reset();
					} else {
						alert("Fallo al entrar :( " + data);
						$('#frmLogin')[0].reset();
					}
				}
			});
		});
	});
</script>