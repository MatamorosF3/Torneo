<!DOCTYPE html>
<html lang="es">
<head>
	<title>Detalles del Partido</title>
	<link rel="stylesheet" href="torneo2.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript">
		function submitform(){
		  document.goals.submit();
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
	<?php
	  if(@$_SESSION['isAdmin']==1) :
	?>
	<section id="principal">
		<article id="score">
		  <form name='goals' action="torneoSeccion2.php" method='post'>
			<table>
				<tr>
					<td id="NombreEquipo">
								España
							</td>
							<td >
								
									<input id="numeroGolesA" name="numeroGolesA" type="number" min="0" max="50" step="1" value ="0"/>
								
							</td>
							
							<td id="NombreEquipo">
								Chile
							</td>
							<td>
								<input id="numeroGolesB" name="numeroGolesB" type="number" min="0" max="50" step="1" value ="0"/>
							</td>
				</tr>
			</table>
		  </form>
		</article>	
		<footer>
			<a href="javascript: submitform()">	
				<div id="siguiente">
					<p>Siguiente</p>
				</div>
			</a>
		</footer>
	</section>
	<?php
		else:
		echo "<h1>No tiene los permisos suficientes para acceder a esta pagina. </h1> </br>";
		header("Refresh:0; url=index.php");
		endif;
	?>

</body>
</html>