<!-- Dorzuć do tej bazy kolejne dwie tabele które mają po 4 pola różnego typu -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$polaczenie = new mysqli($servername, $username, $password);
if(mysqli_connect_errno()){
    echo "Błąd bazy danych";
    exit;
}
echo "Udało się połączyć z bazą<br>";
$tworzeniebazy="CREATE DATABASE IF NOT EXISTS `0910194at`";
$polaczenie->query($tworzeniebazy);
if($polaczenie->query($tworzeniebazy)===TRUE){
    echo "utworzyłeś baze poprawnie<br>";
}
else{
    echo "nie udało się utworzyć bazy";
}
//mysqli_close($polaczenie);
$polaczenie->select_db('0910194at');
echo "wybrałeś bazę<br>";
$tworzenietabeli="CREATE TABLE IF NOT EXISTS nazwatabeli(
    id int not null auto_increment primary key,
    nazwa_produktu text,
    seria varchar(100),
    `data` date,
    ilosc_sztuk int
);";
if($polaczenie->query($tworzenietabeli)){
    echo "Tabela utworzona";
}
else{
    echo "Błąd w tworzeniu tabeli";
}
if($polaczenie->query("CREATE TABLE IF NOT EXISTS nazwatabeli2(
    id int not null auto_increment primary key,
    nazwa_produktu text,
    seria varchar(100),
    `data` date,
    bool binary
);")){
    echo "Tabela utworzona";
}
if($polaczenie->query("CREATE TABLE IF NOT EXISTS nazwatabeli3(
    id int not null auto_increment primary key,
    nazwa_produktu text,
    seria varchar(100),
    `data` date,
    cena float
);")){
    echo "Tabela utworzona";
}
mysqli_close($polaczenie);
?>