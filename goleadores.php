<!DOCTYPE html>
<html lang="es">
<head>
	<title>Detalles del Partido</title>
	<link rel="stylesheet" href="torneo2.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
	<header id="titulo">
		<h1>Resultado del Partido</h1>
			<nav>
				<h2>Detalles</h2>
			</nav>
	</header>

	<section id="principal">
		

			<form name='goals' action="goleadores.php" method='post'>
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
		  </form>
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
										<td>
											<input type=text list=golesA >
											<datalist id=golesA>
											<option>JugadorA 1</option>
											<option>JugadorA 2</option>
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
							if (isset($_POST['numeroGolesB'])){
    							$hasta=$_POST['numeroGolesB'];
							}		
							for($i=0;$i<$hasta;$i++) {
								echo "<tr>
										<td>
											<input type=text list=golesB >
											<datalist id=golesB>
											<option>JugadorB 1</option>
											<option>JugadorB 2</option>
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
				<div id="siguiente">
					<p>Siguiente</p>
				</div>
			</a>
		</footer>
	</section>
</body>
</html>