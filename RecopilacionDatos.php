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
			
			 <h2 id="enMedio">Goleadores</h2>
		  	<article id="score2">
			<section id="goleadores">
					<div id="golA">
					<table>
						<tr>
							<td><h3>Nombre</h3></td>
						</tr>
						<?php	
							/*
								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoA from partidos WHERE IdPartido = '.$idPartido.')';
								$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	*/

							if (isset($_POST['numeroGolesA'])){
    							$hasta1=$_POST['numeroGolesA'];
							}		
							for($i=0;$i<$hasta1;$i++) {

								echo "<tr>
										<td>"
										?>


											<input type="text" list="golesA" name="golesA[]" value="<?php if($_POST) 
													 echo $_POST['golesA'][$i];	?>" disabled>
										
											

										<?php	
											/*
											while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
 		 
    										foreach ($line as $col_value) {
        									
        									echo '<option value ="'.$col_value.'">';
    										}
    
    										
											}*/
											
										?>
												
										<?php
										echo "</td>
										</tr>
										";} 
										//mysql_free_result($result);
										?>

						</table>
					</div>
						
					<div id="golB">
					<table>
						<tr>
							<td><h3>Nombre</h3></td>
						</tr>
						<?php					
							if (isset($_POST['numeroGolesB'])){
    							$hasta2=$_POST['numeroGolesB'];

							}	


								/*$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoB from partidos WHERE IdPartido = '.$idPartido.')';
								$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	*/
	
							for($i=0;$i<$hasta2;$i++) {

								echo "<tr>
										<td>"
										?>


											<input type="text" list="golesB" name="golesB[]" value="<?php if($_POST) 
													 echo $_POST['golesB'][$i];	?>	" disabled/>
											
											

										<?php	

										/*	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
 		 
    										foreach ($line as $col_value) {
        									
        									echo '<option value ="'.$col_value.'">';
    										}
    
    										
											}*/
											
										?>											
										<?php
										echo "</td>
										</tr>
										";} 

										?>
						</table>
					</div>
				</section>		

			<h2 id="enMedio">Amonestados por Amarilla <img src="yellow.png"></h2>
			<article id="score2">
				<section id="goleadores">
					<div id="golA">
						<table>
							<tr>
								<td><h3>Nombre</h3></td>
							</tr>
							<?php
							/* require("ConexionBD.php");
							$idPartido = 12;
							//require("torneoSeccion2.php");
								$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoA from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida AAA".mysql_error());	*/					
							if (isset($_POST['numeroAmarillasA'])){
								$hasta3=$_POST['numeroAmarillasA'];
							}		
							
							for($i=0;$i<$hasta3;$i++) {

								echo "<tr>
								<td>"
									?>

									<input type="text" list="amarillasA" name="amarillasA[]" value="<?php if($_POST) 
													 echo $_POST['amarillasA'][$i];	?>	" disabled/>
									
									

										<?php	
										/*while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}*/

										
										?>

									

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
									$hasta4=$_POST['numeroAmarillasB'];
								}		

								/*$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoB from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	*/
								for($i=0;$i<$hasta4;$i++) {
								
								echo "<tr>
								<td>"
									?>
									<input type="text" list="amarillasB" name="amarillasB[]" value="<?php if($_POST) 
													 echo $_POST['amarillasB'][$i];	?>	"disabled/>
									
									

										<?php	
									/*	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}*/
										
										?>								

									<?php
									echo "</td>
								</tr>";}

								//mysql_free_result($result);

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
										$hasta5=$_POST['numeroRojasA'];
									}		

								/*$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoA from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	*/
									for($i=0;$i<$hasta5;$i++) {
									
								echo "<tr>
								<td>"
									?>
									<input type="text" list="rojasA" name="rajasA[]" value="<?php if($_POST) 
													 echo $_POST['rojasA'][$i];	?>	" disabled/>
									
										<?php	
										/*while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}*/
										
										?>

									<?php
									echo "</td>
								</tr>";}

								//mysql_free_result($result);

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
										$hasta6=$_POST['numeroRojasB'];
									}		
								/*$query = 'SELECT Nombre FROM jugadores WHERE IdTorneo = (SELECT 
									IdTorneo from partidos WHERE IdPartido ='.$idPartido.')  AND IdEquipo = (
									SELECT IdEquipoB from partidos WHERE IdPartido = '.$idPartido.')';
							$result = mysql_query($query) or die ("Consulta fallida".mysql_error());	*/
									for($i=0;$i<$hasta6;$i++) {
									
								echo "<tr>
								<td>"
									?>
									<input type="text" list="rojasB" name="rojasB[]" value="<?php if($_POST) 
													 echo $_POST['rojasB'][$i];	?>	"disabled/>
									
									

										<?php	
										/*while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
											foreach ($line as $col_value) {
												echo '<option value ="'.$col_value.'">';
											}
										}*/
										
										?>				

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
					<!-- <script type="text/javascript">
					function guardar(){
						<?php
						//echo "Lets go";

						?>

					}
					</script> -->
						<a href="javascript: submitform()">	
							<div id="siguiente" >
								<p>Siguiente</p>
							</div>
						</a>
					</footer>
				</section>


	</body>
</html>