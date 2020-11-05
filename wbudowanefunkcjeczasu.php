<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    echo time();//liczba sekund które upłynęły od 01.01.1970 roku
    echo "<br>";
    $data=getdate();
    $dzien=$data["mday"];
    $miesiac=$data["mon"];
    $rok=$data["year"];
    if($dzien<10) $dzien="0$dzien";
    if($miesiac<10) $miesiac="0$miesiac";
    echo "Bieżąca data to : $dzien-$miesiac-$rok<br>";
    echo date("Y-m-d")."<br>";
    echo date("G:i:s")."<br>";
    echo date("H:i:sa");
?>
</body>
</html>