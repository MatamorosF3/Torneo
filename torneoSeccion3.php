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
			<h1>Resultado del Partido</h1>
			<nav>
				<h2>Detalles</h2>
			</nav>
		</header>

		<section id="principal">			
			<table>
				<tr>
					<td id="NombreEquipo">
						España
					</td>
					<td >

						<?php 
						if (isset($_POST['numeroGolesA'])){
							$golesA=$_POST['numeroGolesA'];
						}		
						echo $golesA;

						?>

					</td>

					<td id="NombreEquipo">
						Chile
					</td>
					<td>
						<?php 
						if (isset($_POST['numeroGolesB'])){
							$golesB =$_POST['numeroGolesB'];
						}		
						echo $golesB;

						?>
					</td>
				</tr>
			</table>

			<!-- AQui Esta papa lo de recopilar los datos!! -->
			<?php				
			if($_POST) {
				foreach ($_POST['golesA'] as $value) {
					echo $value."</br>";   			
				}
			}
			?>	

			<h2 id="enMedio">Amonestados por Amarilla <img src="yellow.png"></h2>
			<article id="score2">
				<section id="goleadores">
					<div id="golA">
						<table>
							<tr>
								<td><h3>Nombre</h3></td>
							</tr>
							<?php
							require("ConexionBD.php");
							$idPartido = 12;
							//require("torneoSeccion2.php");
								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoA from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida AAA".mysql_error());						
							if (isset($_POST['numeroAmarillasA'])){
								$hasta=$_POST['numeroAmarillasA'];
							}		
							for($i=0;$i<$hasta;$i++) {

								echo "<tr>
								<td>"
									?>

									<input type="text" list="amarillasA" name="amarillasA[]">
									<datalist id="amarillasA">

										<?php	
										while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}
										?>

									</datalist>	

									<?php
									echo "</td>
								</tr>
								";}
								?>

							</table>
						</div>
						
						<div id="golB">
							<table>
								<tr>
									<td><h3>Nombre</h3></td>
								</tr>
								<?php					
								if (isset($_POST['numeroAmarillasB'])){
									$hasta=$_POST['numeroAmarillasB'];
								}		

								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoB from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	
								for($i=0;$i<$hasta;$i++) {
								
								echo "<tr>
								<td>"
									?>

									<input type="text" list="amarillasB" name="amarillasB[]">
									<datalist id="amarillasB">

										<?php	
										while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}
										?>

									</datalist>	

									<?php
									echo "</td>
								</tr>";}

								mysql_free_result($result);

								?>
							</table>
						</div>
					</section>		
					<section id="amonestados">
						<h2 id="enMedio">Amonestados por Rojas <img src="red.png"> </h2>
						<section id="goleadores">
							<div id="golA">
								<table>
									<tr>
										<td><h3>Nombre</h3></td>
									</tr>
									<?php					
									if (isset($_POST['numeroRojasA'])){
										$hasta=$_POST['numeroRojasA'];
									}		

								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoA from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	
									for($i=0;$i<$hasta;$i++) {
									
								echo "<tr>
								<td>"
									?>

									<input type="text" list="rojasA" name="rojasA[]">
									<datalist id="rojasA">

										<?php	
										while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}
										?>

									</datalist>	

									<?php
									echo "</td>
								</tr>";}

								mysql_free_result($result);

								?>
								</table>
							</div>

							<div id="golB">
								<table>
									<tr>
										<td><h3>Nombre</h3></td>
									</tr>
									<?php					
									if (isset($_POST['numeroRojasB'])){
										$hasta=$_POST['numeroRojasB'];
									}		
								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoB from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	
									for($i=0;$i<$hasta;$i++) {
									
								echo "<tr>
								<td>"
									?>

									<input type="text" list="rojasB" name="rojasB[]">
									<datalist id="rojasB">

										<?php	
										while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}
										?>

									</datalist>	

									<?php
									echo "</td>
								</tr>";}

								mysql_free_result($result);

								?>
								</table>
							</div>
						</section>		
					</article>	
					
					<footer>
					<script type="text/javascript">
					function guardar(){
						<?php
						echo "Lets go";

						?>

					}
					</script>
						<a href="RecopilacionDatos.php">	

							<div id="submit" >
								<p>Enviar Datos</p>
							</div>
						</a>
					</footer>
				</section>
			</body>
			</html>