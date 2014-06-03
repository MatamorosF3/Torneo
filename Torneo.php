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
if (isset($_REQUEST['mostrar'])) {
 	# code...
 } 
 ?>
</body>
</html>