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
    ilosc_sztuk int
);")){
    echo "Tabela utworzona";
}
if($polaczenie->query("CREATE TABLE IF NOT EXISTS nazwatabeli3(
    id int not null auto_increment primary key,
    nazwa_produktu text,
    seria varchar(100),
    `data` date,
    ilosc_sztuk int
);")){
    echo "Tabela utworzona<BR>";
}
if($polaczenie->query("INSERT INTO nazwatabeli(nazwa_produktu,seria,data,ilosc_sztuk) values 
('Zeszyt','w kratke','2016-10-20','20'),
('Zeszyt','w linie','2016-3-06','30'),
('Zeszyt','czysty','2018-12-20','120')
;")){
    echo "wprowadzanie wartości do tabeli";
}
else "Dane nie zapisane";
if($polaczenie->query("INSERT INTO nazwatabeli2(nazwa_produktu,seria,data,ilosc_sztuk) values 
('Zeszyt','w kratke','2016-10-20','20'),
('Zeszyt','w linie','2016-3-06','30'),
('Zeszyt','czysty','2018-12-20','120')
;")){
    echo "wprowadzanie wartości do tabeli";
}
else "Dane nie zapisane";
if($polaczenie->query("INSERT INTO nazwatabeli3(nazwa_produktu,seria,data,ilosc_sztuk) values 
('Zeszyt','w kratke','2016-10-20','20'),
('Zeszyt','w linie','2016-3-06','30'),
('Zeszyt','czysty','2018-12-20','120')
;")){
    echo "wprowadzanie wartości do tabeli";
}
else "Dane nie zapisane";


mysqli_close($polaczenie);
?>