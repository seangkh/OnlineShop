<?php
session_start();
include("dbconnect.php");
include("authentifizierung.php");

// Es wird ein SQL Befehl in einer Variablen gespeichert
$sql = "select id, name, preis, bestand from artikel order by preis DESC";

// In folgender Variable wird die Datenbankanfrage gespeichert inkl. der Fehlermeldung bei Nicht-Funktion

$result = mysql_query($sql) or die (mysql_error());
?>
<html>
<head><title>Artikelliste</title></head>
<body>
<h1>Artikelliste</h1>
Folgende Artikel können Sie bestellen
<table cellspacing=2 cellpadding=4 border=0>
<tr bgcolor="yellow">
<th>Artikel</th><th>Preis</th><th>Bestand</th><th> </th>
</tr>
<?php
	while($row = mysql_fetch_assoc($result))
		{
			print "<tr bgcolor='#cccccc'>";
			print "<td>".$row['name']."</td><td>".$row['preis']." Euro</td><td>".$row['bestand']."</td>";
			print "<td><a href=warenkorb.php?id=".$row['id'].">". "Warenkorb</a></td>";
			print "</tr>";
	 	}
?>
</table>
<a href=warenkorb_uebersicht.php>Zur Warenkorb übersicht</a>
</body>
</html>
