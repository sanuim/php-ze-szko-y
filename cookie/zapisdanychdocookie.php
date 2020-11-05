<?php
if(!isset($_COOKIE['dane']) && !isset($_POST['nazwa'])){
?>
<html>
<head>
</head>
<body>
<form action="zapisdanychdocookie.php" method="POST">
Podaj imie i nazwisko: <br>
<input type="text" name="nazwa" value="" size="35">
<input type="submit" name="wyślij" value="Zapisz dane do cookie">
</form>
<?php
}
else{
    if(isset($_POST['nazwa'])){
        setcookie('dane',$_POST['nazwa'],time()+60*60*24*365);
        echo "Dziękuję za podanie danych";
    }
    else echo "Witaj po raz kolejny ".$_COOKIE['dane'];
}
?>
</body>
</html>