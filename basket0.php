<?php
session_start();
include ("dbconnect.php");
include("authentifizierung.php");

print "Warenkorb von Kundennummer: ".$_SESSION['nummer'];
    $sql = "SELECT COUNT(*) AS anzahl FROM warenkorb WHERE kundennummer='".$_SESSION['nummer']."' AND artikelid='".$id."'";
    $result = mysql_query($sql) OR die(mysql_error());
    $row = mysql_fetch_assoc($result);

if($row['anzahl'] > 0) {
        // Nur Updaten
$sql = "update warenkorb set stueck=stueck+1 where kundennummer='".$_SESSION['nummer']."' AND artikelid='".$id."'";
echo "";
echo $sql;
echo "";
mysql_query($sql) OR die(mysql_error());
    } else {
        // Neuer eintrag
      $sql = "insert into warenkorb (artikelid, kundennummer) values (".$_REQUEST['id'].",".$_SESSION['nummer'].")";
      echo "";
echo $sql;
echo "";
mysql_query($sql) OR die(mysql_error());
    }
?>
<?php

?>
<html>
<head><title>Artikel wurde in den Warenkorb gelegt</title></head>
<body>
<?php
      {
   print "Der Artikel: ".$id." wurde in den Warenkorb gelegt!";
   print "";
   print "<a href=artikel.php>Zurück zur Artikel übersicht</a>";
   print "";
   print "<a href=warenkorb_uebersicht.php>Zum Warenkorb</a>";
   }

?>
</body></html>
