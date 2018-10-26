<?php
session_start();
include ("dbconnect.php");
include("authentifizierung.php");

$sql = "select artikelid, stueck from warenkorb where kundennummer='".$_SESSION['nummer']."'";
$result = mysql_query($sql) OR die(mysql_error());
    $row = mysql_fetch_assoc($result);

      while($row = mysql_fetch_assoc($result))
      {
$sql = "insert into bestellungen (kundennummer, artikelid, stueck) values ('".$_SESSION['nummer']."', '".$row['artikelid']."', '".$row['stueck']."')";
print "
";
print $sql;
print "
";
print "
";
print "
";
print "
";
print "
";
print "
";

mysql_query($sql) OR die(mysql_error());
       }

$sql = "delete from warenkorb where kundennummer='".$_SESSION['nummer']."'";
mysql_query($sql) OR die(mysql_error());

print "Herzlichen Dank für Ihre Bestellung";

?>
