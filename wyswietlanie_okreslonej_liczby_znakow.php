<?php
$tekst=<<<TX
dgrhfghrtfhh gdr gdrg gdrgrdgdr  gdrgdrg d
rgdrg gdr gdrg drgdrhtfhfthtfhf rgdg dg  gdrg dr
 gdrg drg drg g drgdr gdrgdr gdr 
gdr g 
TX;
echo "<br>Tekst przed użyciem funkcji wordwrap(): <br><br>";
echo $tekst."<br><br>";
echo "<br>Tekst po użyciu funkcji nl2br(): <br><br>";
echo wordwrap($tekst,15,"<br>\n",true)."<br><br>";//zmienna,ilość znaków,podział linii,w przypadku słowa dłuższego niż zadeklarowana wartość podzieli wyraz i przeniesie do kolejnej linii.
$tekst1="Klasy technikum maja najwiecej zajęć w szkole";
echo "Wypisanie zdania: " .$tekst1."<br><br>";
echo $tekst1[3];
echo $tekst1[8];
?>