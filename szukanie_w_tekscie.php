<?php
$tekst1="Klasy technikum mają najwięcej zajęć w szkole";
$to_co_szukam=strstr($tekst1,"w ");//przeszukiwany ciąg,to co szukam
echo "<br>";
echo $to_co_szukam."<br>";
echo "Zdanie: ".$tekst1."<br>";
$znajdz=strstr($tekst1,"sz");
if($znajdz==false)
    echo "brak takiej frazy";
else 
    echo "brawo udało się : ".$znajdz."<br>";
$znajdz_indeks=strpos($tekst1,"sz"); //zwraca indeks znalezionej frazy
echo "Znaleziona fraza ma indeks: ".$znajdz_indeks."<br>";
?>