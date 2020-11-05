<!-- Napisz skrypt krótry utworzy ciastko które zapamieta date urodzenia wpisaną przez użytkownika. Skrypt wyświetla informację za ile dni użytkownik obchodzi urodziny -->
<?php
if(isset($_POST['data_urodzenia'])) setcookie('data_urodzenia',$_POST['data_urodzenia'],time()+60*60*24*365);
if(!isset($_COOKIE['data_urodzenia'])){
?>
<html>
<head>
<title>Liczba odwiedzin</title>
</head>
<body>
<form action="zadanie.php" method="POST">
Podaj datę urodzenia: <br>
<input type="date" name="data_urodzenia" value="" size="35">
<input type="submit" name="wyślij" value="Zapisz dane do cookie">
</form>
<?php
}
else{
    echo<<<END
    <html>
    <head>
    <title></title>
    </head>
    <body style="text-align:center;font-size:100px;margin-top:100px;">
END;
    $interval =  date_diff(date_create(date("Y-m-d")),date_create(date('Y')."-".date("m-d",strtotime($_COOKIE['data_urodzenia']))));
    if($interval->format('%R')=='-') echo "Obchodzisz urodziny za ".(365-$interval->format('%a'))." dni";
    else echo "Obchodzisz urodziny za ".$interval->format('%a')." dni";
}
?>
</body>
</html>
