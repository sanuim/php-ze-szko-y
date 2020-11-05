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
$nazwabazy='baza4at22';
$polaczenie=new mysqli($nazwaserwera, $uzytkownik, $haslodobazy); //$nazwabazy);

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

$polaczenie->query($tworzenietabeli);//zapytanie o utworzenie tabeli
if($polaczenie->query($tworzenietabeli)===TRUE)
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

$pobieraniezbazy=$polaczenie->query('SELECT * FROM nazwatabeli');
echo '
	<table border="1">
	<tr>
	<td>id</td>
	<td>nazwa_produktu</td>
	<td>seria</td>
	<td>data</td>
	<td>ilosc_sztuk</td>
	</tr>
';

if($pobieraniezbazy->num_rows>0)
{
	while($row=$pobieraniezbazy->fetch_assoc())
	{
		echo '<tr>
			<td>'.$row["id"].'</td>
			<td>'.$row["nazwa_produktu"].'</td>
			<td>'.$row["seria"].'</td>
			<td>'.$row["data"].'</td>
			<td>'.$row["ilosc_sztuk"].'</td></tr>';
	}
}
else
{
	echo "nie ma nic w tabeli";
}
echo '</table>';

$zmianadanych="UPDATE nazwatabeli SET `ilosc_sztuk`=123456 WHERE `nazwa_produktu`='zeszyt'";
$polaczenie->query($zmianadanych);
if($polaczenie->query($zmianadanych)===TRUE)
{
	echo "dane zostały zaktualizowane";
}
else 
{
	echo "nieudało";
}
mysqli_close($polaczenie);
?>
</form>
</body>
</html>
