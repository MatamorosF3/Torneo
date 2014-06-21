	<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>Detalles del Partido</title>
		<link rel="stylesheet" href="torneo2.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
			function submitform(){
				document.amonestados.submit();
			}
		</script>

	</head>
	<body>
		<header id="titulo">

		<?php 
			/*$idPartido = 12;
			require("conexionBD.php");

				foreach ($_POST['amarillasA'] as $value) {
					$query = 'INSERT INTO faltaspartidos values('.$idPartido.', (SELECT IdEquipoA from partidos WHERE Idpartido ='.$idPartido.'),(
						SELECT IdJugador FROM jugadores WHERE ( SELECT IdTorneo FROM partidos WHERE IdPartido ='.$idPartido.' ) ),aja,'.$value.')';
					  			
				}
				mysql_query($query) or die ("Consulta fallida Amarrillas ingresar".mysql_error());
				*/
			
			?>	
		 
			<h1>Datos enviado exitosamente</h1>
		</header>

			</body>
			</html>