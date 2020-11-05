<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
echo time(); //liczba sekund od 01.01.1970
echo "<br>";
$data=getdate();
$dzien=$data["mday"];
$miesiac=$data["mon"];
$rok=$data["year"];
if($dzien<10) $dzien ="0".$dzien;
if($miesiac<10) $miesiac ="0".$miesiac;
echo "bieżąca data to: $dzien-$miesiac-$rok";
?>
</body>
</html>