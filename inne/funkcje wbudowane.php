<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
$tablica1=array("t1","t2","t3","t4");
$dlugosc=count($tablica1);
for($i;$i<$długosc;$i++)
{
	echo $tablica1[$i]
}
$tablica2=array(1,2,3,8,7,9);
echo "zawartość tablicy przed sortowaniem<br>";
foreach ($tablice2 as $x)
{
	echo "$x";
}
echo "<br>";
sort($tablica2);
echo "tablica po sortowaniu: <br>";
foreach ($tablica2 as $x)
{
	echo "$x";
}
//rsort - sortuje indexowanej od max do min
//asort - sortuje po zawartości od min do max
//arsort - zawartośc max min
//ksort - klucz min max
//krsort - klucz max min
//array_search(poszukiwania wartośc, nazwa przeszukiwanej tablicy)
?>
</body>
</html>