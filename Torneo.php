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


// CREAR TABLA TEMPORAL
$query_crearTabla= 'CREATE TEMPORARY TABLE OrdenarTabla (
    NombreEquipo VARCHAR(50) 
    , PartidosJugados INT 
    , PartidosGanados INT 
    , PartidosEmpatados INT 
    , PartidosPerdidos INT 
    , GolesAFavor INT 
    , GolesEnContra INT 
    , Pts INT 
)';

$res = mysql_query($query_crearTabla,$link) or die( 'Consulta fallida temporal123'.mysql_error());


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
$query = 'SELECT E.NombreEquipo AS NE,
 SUM(IF(IdEquipoA = '.$f.' OR IdEquipoB = 1,1,0)) AS PartidosJugados, 
 SUM(IF((IdEquipoA = '.$f.' AND GolesA > GolesB) OR (IdEquipoB ='.$f.'  AND GolesB > GolesA) ,1,0)) AS PartidosGanados,
SUM(IF((IdEquipoA = '.$f.' AND GolesA = GolesB) OR (IdEquipoB ='.$f.'  AND GolesB = GolesA) ,1,0)) AS PartidosEmpatados,
SUM(IF((IdEquipoA = '.$f.' AND GolesA < GolesB) OR (IdEquipoB ='.$f.'  AND GolesB < GolesA) ,1,0)) AS PartidosPerdidos,
SUM(IF( IdEquipoA='.$f.',GolesA, IF(IdEquipoB ='.$f.',GolesB,0) )) AS GolesAFavor,
SUM(IF( IdEquipoA='.$f.',GolesB, IF(IdEquipoB ='.$f.',GolesA,0) )) AS GolesEnContra,
 SUM(IF((IdEquipoA = '.$f.' AND GolesA > GolesB) OR (IdEquipoB ='.$f.'  AND GolesB > GolesA) ,3,IF((IdEquipoA = '.$f.' AND GolesA = GolesB) OR (IdEquipoB ='.$f.'  AND GolesB = GolesA),1,0 ))) AS Pts

  FROM equiposportorneos EPT JOIN equipo E ON EPT.IdEquipo = E.IdEquipo JOIN partidos P ON EPT.IdEquipo = '.$f.' AND EPT.IdTorneo = 1';
$result = mysql_query($query) or die('Consulta fallida:INSERTAR a otra tabla ' . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);

$query2 = 'INSERT INTO OrdenarTabla  values("'.$line['NE'].'",'.$line['PartidosJugados'].','.$line['PartidosGanados'].','.$line['PartidosEmpatados'].','
  .$line['PartidosPerdidos']
  .','.$line['GolesAFavor'].','.$line['GolesEnContra'].','.$line['Pts'].')';
mysql_query($query2) or die("Fallo insertar sumary ".mysql_error());

mysql_free_result($result);

}


$query = 'SELECT * FROM OrdenarTabla ORDER BY PTS DESC, GolesAFavor DESC ';
$result = mysql_query($query);
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
  
    echo "<tr>";
   foreach ($line as $col_value) {
        echo "<td>$col_value</td>";
    }
    
    echo "</tr>";
    
}
// Liberar resultados
mysql_free_result($result);


echo "</table>\n";
// usar el nombre en DESPLEGANDO LOS RESULTADOS...


?>

</body>
</html>
