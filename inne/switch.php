<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
$x=1;
while (rand(1,100)!=21)
{
	$x++;
}
print ("<b>21</b>wylosowano za ".$x." razem");
$suma=0;
do
{
	$y=rand(1,20);
	$suma=$suma+$y;
	print ($y." + ");
}
while ($suma<100);
print (" = ".$suma);
?>
</body>
</html>