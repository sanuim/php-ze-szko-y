<?php
if(!isset($_COOKIE['odwiedz'])){
$odw=1;
}
else{
    $odw=intval($_COOKIE['odwiedz']+1);
}
setcookie('odwiedz',$odw,time()+60*60*24*365);
?>
<html>
<head>
<title>Liczba odwiedzin</title>
</head>
<body>
<?php
if($odw==1) $wyraz="raz";
else $wyraz="razy";
echo "W ciągu roku odwiedziłeś tą stronę $odw $wyraz";
?>
</body>
</html>
<!-- Napisz skrypt krótry utworzy ciastko które zapamieta date urodzenia wpisaną przez użytkownika. Skrypt wyświetla informację za ile dni użytkownik obchodzi urodziny -->