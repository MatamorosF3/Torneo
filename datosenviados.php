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
	<p>golesA</p>
	<?php if($_POST) 
		foreach ($_POST['golesA'] as $value) {
			 echo $value."<br>";	
		}
			
	?>
	<p>golesB</p>
	<?php if($_POST) 
		foreach ($_POST['golesB'] as $value) {
			 echo $value."<br>";	
		}
			
	?>
	<p>amonestadosA</p>
	<?php if($_POST) 
		foreach ($_POST['amarillasA'] as $value) {
			 echo $value."<br>";	
		}			
	?>
	<p>amonestadosB</p>
	<?php if($_POST) 
		foreach ($_POST['amarillasB'] as $value) {
			 echo $value."<br>";	
		}			
	?>
	<p>rojasA</p>
	<?php if($_POST) 
		foreach ($_POST['rojasA'] as $value) {
			 echo $value."<br>";	
		}			
	?>
	<p>rojasB</p>
	<?php if($_POST) 
		foreach ($_POST['rojasB'] as $value) {
			 echo $value."<br>";	
		}			
	?>


	<section id="principal">
		<article id="sent">		  
			<div id="enviados">
				<p>Datos Enviados con Éxito</p>
			</div>
		 
		</article>			
	</section>
</body>
</html>