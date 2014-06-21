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
								$query = "SELECT Nombre FROM jugadores WHERE IdTorneo = 1 AND IdEquipo = 1";
								$result = mysql_query($query) or die ("Consulta fallida".mysql_error());						
							if (isset($_POST['numeroAmarillasA'])){
    							$hasta=$_POST['numeroAmarillasA'];
							}		
							for($i=0;$i<$hasta;$i++) {
								
																echo "<tr>
										<td>"
										?>



											<input type="text" list="amaA" name="amarillasA[]">
											<datalist id="amaA">

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
							for($i=0;$i<$hasta;$i++) {
								echo "<tr>
										<td>
											<input type=text list=amaB >
											<datalist id=amaB>
											<option>JugadorB-A 1</option>
											<option>JugadorB-A 2</option>
											</datalist>	

										</td>
										</tr>
										";}
									
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
							for($i=0;$i<$hasta;$i++) {
								echo "<tr>
										<td>
											<input type=text list=rojitaA >
											<datalist id=rojitaA>
											<option>JugadorA-R 1</option>
											<option>JugadorA-R 2</option>
											</datalist>	

										</td>
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
							if (isset($_POST['numeroRojasB'])){
    							$hasta=$_POST['numeroRojasB'];
							}		
							for($i=0;$i<$hasta;$i++) {
								echo "<tr>
										<td>
											<input type=text list=rojitaB >
											<datalist id=rojitaB>
											<option>JugadorB-R 1</option>
											<option>JugadorB-R 2</option>
											</datalist>	

										</td>
										</tr>
										";}
									
							?>
						</table>
					</div>
				</section>		
		</article>	
		<footer>
			<a href="">	
				<div id="submit">
					<p>Enviar Datos</p>
				</div>
			</a>
		</footer>
	</section>
</body>
</html>