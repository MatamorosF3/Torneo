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
		<form name='amonestados' action="RecopilacionDatos.php" method='post'>
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
						<input id="numeroGolesA" name="numeroGolesA" type="hidden" min="0" max="50" step="1" value ="<?php echo $golesA; ?>"/>
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
						<input id="numeroGolesA"  name="numeroGolesB" type="hidden" min="0" max="50" step="1" value ="<?php echo $golesB; ?>"/>
					</td>
				</tr>
			</table>

			<!-- AQui Esta papa lo de recopilar los datos!! -->
			<?php				
			if($_POST) {
				require("ConexionBD.php");
				$idPartido = 12;
				foreach ($_POST['golesA'] as $value) {
					$query = 'INSERT INTO golespartidos values('.$idPartido.',(SELECT IdEquipoA from partidos WHERE IdPartido ='.$idPartido.'),
	(SELECT IdJugador FROM jugadores WHERE IdTorneo = (SELECT IdTorneo FROM partidos WHERE IdPartido ='.$idPartido.')
	  AND Nombre = "'.$value.'"  ),1 )';
	  $result  =mysql_query($query) or die("Fallo consulta de insertar golespartidosA".mysql_error());
					
			?>
					
			<?php
				}
			}
			?>
			<?php				
			if($_POST) {
				require("ConexionBD.php");
				$idPartido = 12;
				foreach ($_POST['golesB'] as $value) {
					$query = 'INSERT INTO golespartidos values('.$idPartido.',(SELECT IdEquipoB from partidos WHERE IdPartido ='.$idPartido.'),
	(SELECT IdJugador FROM jugadores WHERE IdTorneo = (SELECT IdTorneo FROM partidos WHERE IdPartido ='.$idPartido.')
	  AND Nombre = "'.$value.'"  ),1 )';
	  $result  =mysql_query($query) or die("Fallo consulta de insertar golespartidosA".mysql_error());

			?>
					<?php		
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
								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoA from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida AAA".mysql_error());				
							if (isset($_POST['numeroAmarillasA'])){
								$hasta1=$_POST['numeroAmarillasA'];
							}		

							for($i=0;$i<$hasta1;$i++) {

								echo "<tr>
								<td>"
									?>
									<input id="numeroAmarillasA" name="numeroAmarillasA" type="hidden" min="0" max="50" step="1" value ="<?php echo $hasta1; ?>"/>
									 
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
									$hasta2=$_POST['numeroAmarillasB'];
								}		

								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoB from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	
								for($i=0;$i<$hasta2;$i++) {
								
								echo "<tr>
								<td>"
									?>
									<input id="numeroAmarillasB" name="numeroAmarillasB" type="hidden" min="0" max="50" step="1" value ="<?php echo $hasta2; ?>"/>

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
										$hasta3=$_POST['numeroRojasA'];
									}		

								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoA from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	
									for($i=0;$i<$hasta3;$i++) {
									
								echo "<tr>
								<td>"
									?>
									
									<input id="numeroRojasA" name="numeroRojasA" type="hidden" min="0" max="50" step="1" value ="<?php echo $hasta3; ?>"/>

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
										$hasta4=$_POST['numeroRojasB'];
									}		
								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoB from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	
									for($i=0;$i<$hasta4;$i++) {
									
								echo "<tr>
								<td>"
									?>
									<input id="numeroRojasB" name="numeroRojasB" type="hidden" min="0" max="50" step="1" value ="<?php echo $hasta4; ?>"/>
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

								//mysql_free_result($result);

								?>
								</table>
							</div>
						</section>		
					</article>	
					
					<footer>
					
						<a href="javascript: submitform()">	
							<div id="siguiente" >
								<p>Siguiente</p>
							</div>
						</a>
					</footer>
				</section>
				</form>
			</body>
			</html>