<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
//dorzuć do tej bazy 2 tabele po 4 pole róznego typu
$nazwaserwera='[localhost]';
$uzytkownik='root';
$haslodobazy='';
$nazwabazy='phppolaczenie';
$polaczenie=new mysqli($nazwaserwera, $uzytkownik, $haslodobazy); //$nazwabazy);
/*if(mysqli_connect_errno())
{
	echo 'błąd bazy danych';
	exit;
}
echo 'udało się połączyć';

$tworzeniebazy="CREATE DATABASE IF NOT EXISTS `baza4at22` ";
$polaczenie->query($tworzeniebazy);//wysłanie zapytania czy baza jest utowrzona
if($polaczenie->query($tworzeniebazy)===TRUE)
{
	echo 'utworzyłeś bazę poprawni<br>';
}
else
{
	echo 'no nie pykło mordo';
}
*/ 

$polaczenie->select_db('baza4at22');
echo "wybrałeś nową bazę";
$tworzenietabeli="CREATE TABLE IF NOT EXISTS nazwatabeli(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
nazwa_produktu text,
seria varchar(100),
data date,
ilosc_sztuk INT
);";
$tworzenietabeli2="CREATE TABLE IF NOT EXISTS cos(
id2 INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id2),
nazwa_drogi text,
nr varchar(100),
data date
);";
$tworzenietabeli3="CREATE TABLE IF NOT EXISTS cos2(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
nazwa text,
data date,
ilosc_sztuk INT
);";
$polaczenie->query($tworzenietabeli);//zapytanie o utworzenie tabeli
if($polaczenie->query($tworzenietabeli)===TRUE)
{
	echo "<br>tabela utworzona";
}
else
{
	echo "<br>tabela nie utworzona";
}
$polaczenie->query($tworzenietabeli2);

if($polaczenie->query($tworzenietabeli2)===TRUE)
{
	echo "<br>tabela utworzona";
}
else
{
	echo "<br>tabela nie utworzona";
}
$polaczenie->query($tworzenietabeli3);

if($polaczenie->query($tworzenietabeli3)===TRUE)
{
	echo "<br>tabela utworzona";
}
else
{
	echo "<br>tabela nie utworzona";
}

$wprowadzaniedanych="INSERT INTO nazwatabeli(nazwa_produktu,seria,data,ilosc_sztuk)
VALUES
('Zeszyt','w kratke','2016-11-20','20'),
('Zeszyt','w linie','2015-05-14','30'),
('Zeszyt','czysty','2017-10-22','25');";
if($polaczenie->query($wprowadzaniedanych)===TRUE)
{
	echo "<br>dane utworzone";
}
else
{
	echo "<br>coś nie pykło mordo";
}
$wprowadzaniedanych2="INSERT INTO cos(nazwa_produktu,seria,data,ilosc_sztuk)
VALUES
('Zeszyt','2016-11-20','40'),
('Zeszyt','2015-05-14','30'),
('Zeszyt','2017-10-22','20');";
if($polaczenie->query($wprowadzaniedanych)===TRUE)
{
	echo "<br>dane utworzone";
}
else
{
	echo "<br>coś nie pykło mordo";
}
$wprowadzaniedanych3="INSERT INTO cos2(nazwa_produktu,seria,data,ilosc_sztuk)
VALUES
('Zeszyt','w kratke','2016-11-20'),
('Zeszyt','w linie','2015-05-14'),
('Zeszyt','czysty','2017-10-22');";
if($polaczenie->query($wprowadzaniedanych)===TRUE)
{
	echo "<br>dane utworzone";
}
else
{
	echo "<br>coś nie pykło mordo";
}
mysqli_close($polaczenie);

?>
</form>
</body>
</html>
