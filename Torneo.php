<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>
<body>
<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('127.0.0.1', 'root', 'fuckeveryonee')
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('torneo') or die('No se pudo seleccionar la base de datos');
?>


<?php
require("DetalleEquipo.php");
$EstadisticasEquipos = array();

$query = 'SELECT NombreEquipo  FROM equipo JOIN equiposportorneos ON equipo.IdEquipo = equiposportorneos.IdEquipo WHERE IdTorneo = 1';

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
while ($dato = mysql_fetch_array($result, MYSQL_ASSOC)) {
   		$EstadisticasEquipos[$dato["NombreEquipo"]] = new DetalleEquipo();
}

mysql_free_result($result);

?>


<?php


// Realizar una consulta MySQL

$query = 'SELECT * FROM Jugadores ORDER BY IdJugador';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());


// Imprimir los resultados en HTML
echo "<table class='reference' style='width:60%'>\n";
$fields = array();
$res=mysql_query("SHOW COLUMNS FROM Jugadores");
while ($x = mysql_fetch_assoc($res)){
  $fields[] = $x['Field'];
}
echo "<tr>";
foreach ($fields as $f) { echo "<th>".$f."</th>"; }

echo"</tr>";


while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	
    echo "<tr>";
   foreach ($line as $col_value) {
        echo "<td>$col_value</td>";
    }
    
    echo "</tr>";
    
}
echo "</table>\n";
// usar el nombre en DESPLEGANDO LOS RESULTADOS...

// Liberar resultados
mysql_free_result($result);
?>

</body>
</html>


