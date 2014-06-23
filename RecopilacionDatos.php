	<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>Datos Guardados</title>
		<link rel="stylesheet" href="torneo2.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
			function submitform(){
				document.enviados.submit();
			}
		</script>

	</head>
	<body>
	<header id="titulo">
			<h1>Datos Guardados!!</h1>
			
		</header>
		<?php

		if($_POST) {
			require("ConexionBD.php");
			$idPartido = 12;
			if(!empty($_POST['amarillasA'])){
						foreach ($_POST['amarillasA'] as $value) {
							$query = 'INSERT INTO faltaspartidos values('.$idPartido.',(SELECT IdEquipoA from partidos WHERE IdPartido ='.$idPartido.'),
								(SELECT IdJugador FROM jugadores WHERE IdTorneo = (SELECT IdTorneo FROM partidos WHERE IdPartido ='.$idPartido.')
									AND Nombre = "'.$value.'"  ),"",1,0 )';
				$result  =mysql_query($query) or die("Fallo consulta de insertar golespartidosAAAA".mysql_error());
				echo $value;
			
			
			}}
}
?>


<?php					
if (isset($_POST['numeroGolesB'])){
	$hasta2=$_POST['numeroGolesB'];

}	

if($_POST) {
	require("ConexionBD.php");
	$idPartido = 12;
	if(!empty($_POST['amarillasA'])){
	foreach ($_POST['amarillasB'] as $value) {
		$query = 'INSERT INTO faltaspartidos values('.$idPartido.',(SELECT IdEquipoB from partidos WHERE IdPartido ='.$idPartido.'),
			(SELECT IdJugador FROM jugadores WHERE IdTorneo = (SELECT IdTorneo FROM partidos WHERE IdPartido ='.$idPartido.')
				AND Nombre = "'.$value.'"  ),"",1,0 )';
	$result  =mysql_query($query) or die("Fallo consulta de insertar golespartidosABV".mysql_error());
	echo $value;


}
}
}
?>

<?php					
if (isset($_POST['numeroRojasA'])){
	$hasta5=$_POST['numeroRojasA'];
}		


if($_POST) {
	require("ConexionBD.php");
	$idPartido = 12;
	if(!empty($_POST['amarillasA'])){
	foreach ($_POST['rojasA'] as $value) {
		$query = 'INSERT INTO faltaspartidos values('.$idPartido.',(SELECT IdEquipoA from partidos WHERE IdPartido ='.$idPartido.'),
			(SELECT IdJugador FROM jugadores WHERE IdTorneo = (SELECT IdTorneo FROM partidos WHERE IdPartido ='.$idPartido.')
				AND Nombre = "'.$value.'"  ),"",0,1 )';
	$result  =mysql_query($query) or die("Fallo consulta de insertar golespartidosA".mysql_error());
	echo $value;


}
}
}
?>
<?php					
		

if($_POST) {
	require("ConexionBD.php");
	$idPartido = 12;
	if(!empty($_POST['amarillasA'])){
	foreach ($_POST['rojasB'] as $value) {
		$query = 'INSERT INTO faltaspartidos values('.$idPartido.',(SELECT IdEquipoB from partidos WHERE IdPartido ='.$idPartido.'),
			(SELECT IdJugador FROM jugadores WHERE IdTorneo = (SELECT IdTorneo FROM partidos WHERE IdPartido ='.$idPartido.')
				AND Nombre = "'.$value.'"  ),"",0,1 )';
	$result  =mysql_query($query) or die("Fallo consulta de insertar golespartidosA".mysql_error());
	echo $value;


}
}
}
?>


</body>
</html>