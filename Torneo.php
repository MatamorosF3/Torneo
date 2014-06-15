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


// Realizar una consulta MySQL
$prueba = 1;



// Imprimir los resultados en HTML
echo "<table class='reference' style='width:60%'>\n";
$fields = array();
$res=mysql_query("SELECT IdEquipo FROM equiposportorneos WHERE IdTorneo = 1");
while ($x = mysql_fetch_assoc($res)){
  $fields[] = $x['IdEquipo'];
}
mysql_free_result($res);
echo "<tr>";
echo "<th>NombreEquipo </th>";
echo "<th>P.J. </th>";
echo "<th>P.G. </th>";
echo "<th>P.E.</th>";
echo "<th>P.P</th>";
echo "<th>G.F. </th>";
echo "<th>G.C. </th>";
echo "<th>Pts</th>";
echo"</tr>";

foreach ($fields as $f) { 
$query = 'SELECT E.NombreEquipo,
 SUM(IF(IdEquipoA = '.$f.' OR IdEquipoB = 1,1,0)), 
 SUM(IF((IdEquipoA = '.$f.' AND GolesA > GolesB) OR (IdEquipoB ='.$f.'  AND GolesB > GolesA) ,1,0)),
SUM(IF((IdEquipoA = '.$f.' AND GolesA = GolesB) OR (IdEquipoB ='.$f.'  AND GolesB = GolesA) ,1,0)),
SUM(IF((IdEquipoA = '.$f.' AND GolesA < GolesB) OR (IdEquipoB ='.$f.'  AND GolesB < GolesA) ,1,0)),
SUM(IF( IdEquipoA='.$f.',GolesA, IF(IdEquipoB ='.$f.',GolesB,0) )),
SUM(IF( IdEquipoA='.$f.',GolesB, IF(IdEquipoB ='.$f.',GolesA,0) )),
 SUM(IF((IdEquipoA = '.$f.' AND GolesA > GolesB) OR (IdEquipoB ='.$f.'  AND GolesB > GolesA) ,3,IF((IdEquipoA = '.$f.' AND GolesA = GolesB) OR (IdEquipoB ='.$f.'  AND GolesB = GolesA),1,0 )))

  FROM equiposportorneos EPT JOIN equipo E ON EPT.IdEquipo = E.IdEquipo JOIN partidos P ON EPT.IdEquipo = '.$f.' AND EPT.IdTorneo = 1';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
  
    echo "<tr>";
   foreach ($line as $col_value) {
        echo "<td>$col_value</td>";
    }
    
    echo "</tr>";
    
}
// Liberar resultados
mysql_free_result($result);
}
echo "</table>\n";
// usar el nombre en DESPLEGANDO LOS RESULTADOS...


?>

</body>
</html>


