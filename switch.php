<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    $kolor="czerwony";
    switch($kolor){
        case "czerwony":print("Kolor <font color=\"red\">czerwony</font>");
        break;
        case "zielony":print("Kolor <font color=\"green\">zielony</font>");
        break;
        case "niebieski":print("Kolor <font color=\"blue\">niebieski</font>");
        break;
        default:print("Nie ma koloru");
    }
?>
</body>
</html>