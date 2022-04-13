<?php
 $AnzahlDatensaetze  = $result->num_rows;
 $DatensaetzeSeite  = 8;
 // echo "$row_cnt";



 $DatensaetzeSeite  = ceil($AnzahlDatensaetze  / $DatensaetzeSeite );


// Die aktuelle Seite ermitteln
 $AktuelleSeite = (int) ($_GET["seite"] ?? 1);
 // echo $AktuelleSeite;
// Den Wert überprüfen und ggf. ändern
$AktuelleSeite = ctype_digit($AktuelleSeite) ? $AktuelleSeite : 1;
$AktuelleSeite = $AktuelleSeite < 1 || $AktuelleSeite > $DatensaetzeSeite  ? 1 : $AktuelleSeite;

///////////////////////////////////////////

?>