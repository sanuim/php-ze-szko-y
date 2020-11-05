<?php
echo "Dodano dane rekrutacyjne do bazy";
$polaczenie = new mysqli('localhost','root','','baza');
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$stanowisko=$_POST['stanowisko'];
if($polaczenie->query("INSERT into pracownicy (imie,nazwisko,stanowisko) values ($imie,$nazwisko,$stanowisko);")){
    echo "dodano";
}
mysqli_close($polaczenie);
?>