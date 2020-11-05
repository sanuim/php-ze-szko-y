<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
function wypisz()
{
	echo "wypisz z funkcji";
}
wypisz();
function wypisanie1($znak, $dlugosc)
{
	for($i=0; $i<$dlugosc;$i++)
	print($znak);
	print("<br>");
}
wypisz1("#",34);
wypisz1("@",31);
$z=1;

function zew()
{
	global $z;
	echo "zmienna z= $z";
}
zew();
?>
</body>
</html>