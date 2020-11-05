<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
$tablica=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$parz=array();
$nieparz=array();
$p=0;
$np=0;

for($i=0;$i<9;$i++)
{
	if($tablica[$i]%2==0)
	{
		$parz[$p]=$tablica[$i];
		$p++;
	}
	else if($tablica[$i]%2==1)
	{
		$nieparz[$np]=$tablica[$i];
		$np++;
	}
}
echo 'parzyste: ';
for($j=0;$j<$p;$j++)
{
	echo $parz[$j];
}

echo '<br>nieparzyste: ';
for($j=0;$j<$np;$j++)
{
	echo $nieparz[$j];
}
?>

</body>
</html>
