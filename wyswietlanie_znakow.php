<?php
$tekst=<<<TX
dgr gdr gdrg gdrgrdgdr  gdrgdrg d
rgdrg gdr gdrg drgdr rgdg dg  gdrg dr
 gdrg drg drg g drgdr gdrgdr gdr 
gdr g 
TX;
echo "<br>Tekst przed użyciem funkcji nl2br(): <br><br>";
echo $tekst."<br><br>";
echo "<br>Tekst po użyciu funkcji nl2br(): <br><br>";
echo nl2br($tekst)."<br><br>";
?>