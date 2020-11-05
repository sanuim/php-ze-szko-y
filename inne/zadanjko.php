<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
$dzien = date('d');
$dzien_tyg = date('l');
$miesiac = date('n');
$rok = date('Y');
$godziny = date ('G');

$miesiac_em = array(1 => 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
$ilosc_dni = 0;

for($i=1; $miesiac>$i; $i++)
{
	$ilosc_dni = $ilosc_dni + $miesiac_em[$i];
}

$ilosc_dni = $ilosc_dni + $dzien - 1;
$ilosc_dni_k = 365 - $ilosc_dni - 1;
$godziny_k = 24 - $godziny;


echo $ilosc_dni.' tyle dni było od początku oraz '.$godziny.' godzin<br>';
echo $ilosc_dni_k.' tyle dni zostało do końca oraz '.$godziny_k.' godzin';

?>
</body>
</html>
