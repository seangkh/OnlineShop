<?php
session_start();
include ("dbconnect.php");
include("authentifizierung.php");

if (isset($_REQUEST['weniger']) && $_REQUEST['weniger'] == 1) {
$sql = "update warenkorb set stueck=stueck-1 where kundennummer='".$_SESSION['nummer']."' AND artikelid='".$_REQUEST['artikelid']."'";
echo "";
echo $sql;
echo "";
$weniger = mysql_query($sql) OR die(mysql_error());
}

if (isset($_REQUEST['weniger']) && $_REQUEST['weniger'] == 2) {
$sql = "update warenkorb set stueck=stueck+1 where kundennummer='".$_SESSION['nummer']."' AND artikelid='".$_REQUEST['artikelid']."'";
echo "";
echo $sql;
echo "";
$weniger = mysql_query($sql) OR die(mysql_error());
}


print "Warenkorb von Kundennummer: ".$_SESSION['nummer'];
    $sql = "SELECT COUNT(*) AS anzahl FROM warenkorb WHERE kundennummer='".$_SESSION['nummer']."' AND artikelid='".$id."'";
    $result = mysql_query($sql) OR die(mysql_error());
    $row = mysql_fetch_assoc($result);



$sql = "SELECT COUNT(*) AS anzahl FROM warenkorb";
            echo "";
echo $sql;
echo "";
    $result = mysql_query($sql) OR die(mysql_error());
    $row = mysql_fetch_assoc($result);

    echo "Anzahl gleicher Eintrï¿½ge: ".$row['anzahl']."";

// Jetzt die Artikeldaten zwecks Anzeige selektieren
$sql = "select name, preis, stueck, artikelid from artikel, warenkorb where warenkorb.kundennummer=".$_SESSION['nummer']." and artikel.id=warenkorb.artikelid";

$result = mysql_query($sql) or die (mysql_error());

?>
<?php

?>
<html>
<head><title>Warenkorb übersicht</title></head>
<body>
<h1>Warenkorb</h1>
Folgende Artikel liegen im Warenkorb:

<table cellspacing=2 cellpadding=4 border=0>
<tr bgcolor="yellow">
<th>Artikel</th><th>Preis</th><th>Stueck</th><th>Anzahl um -1 verringern</th><th>Anzahl um +1 erhï¿½hen</th>
</tr>
<?php
   // Die mysql_fetch_assoc, die hier stand, wird jetzt schon vorher aufgerufen
      while($row = mysql_fetch_assoc($result))
      {
   print "<tr bgcolor='#cccccc'>";
   print "<td>".$row['name']."</td><td>".$row['preis']." Euro</td><td>".$row['stueck']."</td>";
   print "<td><a href=warenkorb_uebersicht.php?weniger=1&artikelid=".$row['artikelid'].">weniger</a></td>";
    print "<td><a href=warenkorb_uebersicht.php?weniger=2&artikelid=".$row['artikelid'].">mehr</a></td>";
   print "</tr>";
       }

?>
</table>


&gt;&gt;&gt; Bestellung abschicken &lt;&lt;&lt;</p>


Zurück zur Artikelseite</p>
</body></html>
