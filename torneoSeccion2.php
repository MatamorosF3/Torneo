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
		<form name='amonestados' action="torneoSeccion3.php" method='post'>		
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
		   <h2 id="enMedio">Goleadores</h2>
		  	<article id="score2">
			<section id="goleadores">
					<div id="golA">
					<table>
						<tr>
							<td><h3>Nombre</h3></td>
						</tr>
						<?php					
							if (isset($_POST['numeroGolesA'])){
    							$hasta=$_POST['numeroGolesA'];
							}		
							for($i=0;$i<$hasta;$i++) {

								echo "<tr>
										<td>"
										?>
											<input type="text" list="golesA" name="golesA[]">
											<datalist id="golesA">
											<option value=<?php echo "JugadorA1"?> >
											<option value=<?php echo "JugadorA2"?> >
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
							if (isset($_POST['numeroGolesB'])){
    							$hasta=$_POST['numeroGolesB'];
							}		
							for($i=0;$i<$hasta;$i++) {
								echo "<tr>
										<td>
											<input type=text list=golesB >
											<datalist id=golesB>
											<option value= JugadorB 1>JugadorB 1</option>
											<option value= JugadorB 2>JugadorB 2</option>
											</datalist>	

										</td>
										</tr>
										";}
									
							?>
						</table>
					</div>
				</section>		
			<section id="amonestados">
			<h2 id="enMedio">Tarjetas Amarillas <img src="http://swammyjose.1eko.com/yellow.png"> </h2>
			
			<table>
				<tr>
					<td id="NombreEquipo">
								España
							</td>
							<td >
								
									<input id="numeroAmarillasA" name="numeroAmarillasA" type="number" min="0" max="50" step="1" value ="0"/>
								
							</td>
							
							<td id="NombreEquipo">
								Chile
							</td>
							<td>
								<input id="numeroAmarillasB" name="numeroAmarillasB" type="number" min="0" max="50" step="1" value ="0"/>
							</td>
				</tr>
			</table>
		  

		  <h2 id="enMedio">Tarjetas Rojas <img src="http://swammyjose.1eko.com/red.png"> </h2>
			
			<table>
				<tr>
					<td id="NombreEquipo">
								España
							</td>
							<td >
								
									<input id="numeroRojasA" name="numeroRojasA" type="number" min="0" max="50" step="1" value ="0"/>
								
							</td>
							
							<td id="NombreEquipo">
								Chile
							</td>
							<td>
								<input id="numeroRojasB" name="numeroRojasB" type="number" min="0" max="50" step="1" value ="0"/>
							</td>
				</tr>
			</table>
		  </form>
		  </section>		
		</article>	
		<footer>
			<a href="javascript: submitform()">	
				<div id="siguiente">
					<p>Siguiente</p>
				</div>
			</a>
		</footer>
	</section>
</body>
</html>