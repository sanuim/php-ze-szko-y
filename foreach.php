<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    $tab=array(
        1=>'biały',
        2=>'czerwony',
        3=>'zielony',
        4=>'czarny'
    );
    foreach($tab as $x){
        echo "$x<br>";
    }
    $tab1=array(
        1=>'biały1',
        2=>'czerwony1',
        3=>'zielony1',
        4=>'czarny1'
    );
    foreach($tab1 as $kl=>$x1){
        echo "tab1[$kl] = $x1 <br>";
    }
?>
</body>
</html>