<?php 
	session_start();

	include "conexion.php";
	
		$usuario=$_POST['usuario'];
		$password=$_POST['password'];

			try {
				$sql="SELECT * FROM usuarios WHERE Usuario='$usuario' AND Contraseña='$password'";
				$result=pg_query($conexion,$sql);
				$num_rows=pg_num_rows($result);
				if($num_rows=="1"){
					$data=pg_fetch_array($result);
					$_SESSION["id"]=$data["id_usuario"];
					$_SESSION["usuario"]=$data["nombre"];
					echo 1;
				}else{
					echo 2;
				}
			} catch (Exception $e) {
				echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}


			
?>