<html>
<head>
	<meta charset="UTF-8">

</head>
<body>

Imie: <?php echo $_GET['imie'] ?><br/>
Nazwisko: <?php echo $_GET['nazwisko'] ?><br/>
Czy chcesz fakture: <?php echo $_GET['faktura']=='on'? 'Tak':'Nie' ?><br/>
Chcę zamówić:<br/>
<?php
switch($_GET['zamow'])
{
	case "kola";
	echo "cola";
	break;
	
	case "fanta";
	echo "fanta";
	break;
	
	case "woda";
	echo "woda";
	break;
}
?>
</form>
</body>
</html>
