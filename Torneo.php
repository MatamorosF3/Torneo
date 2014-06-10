<?php
// Conectando, seleccionando la base de datos */
/*$link = mysql_connect('host', 'user', 'pass')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('torneo') or die('No se pudo seleccionar la base de datos');
*/
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>
	<form method="post" action="Torneo.php">
		<input type="submit" name="mostrar" value="Mostrar">
	</form>
<?php
	$con=mysqli_connect("localhost", "swammj", "1989april27", "Torneo");
	if (mysqli_connect_errno($con)){
		echo "Failed to connect " . mysqli_connect_error();
	}else{
		echo "Connection Succesful";
	}

if (isset($_REQUEST['mostrar'])) {
 	# code...
 } 
 ?>
</body>
</html>