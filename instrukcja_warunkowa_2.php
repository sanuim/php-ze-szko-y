<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    $x=12;
    $y=10;
    if ($x<0)
        print("X jest ujemne");
    elseif($x<10) print("X jest z zakresu 0-10");
    elseif($x<20) print("X jest z zakresu 10-20");
    elseif($x<30) print("X jest z zakresu 20-30");
    else echo "X jest poza zakresem";
?>
</body>
</html>