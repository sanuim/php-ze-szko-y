<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
$nazwaserwera='[localhost]';
$uzytkownik='root';
$haslodobazy='';
//$nazwabazy='phppolaczenie';
$polaczenie=new mysqli($nazwaserwera, $uzytkownik, $haslodobazy, $nazwabazy);
if(mysqli_connect_errno())
{
	echo 'błąd bazy danych';
	exit;
}
echo 'udało się połączyć';
mysqli_close($polaczenie);


?>
</form>
</body>
</html>
