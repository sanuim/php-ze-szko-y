<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    $tablica1=array("t1","t2","t3","t4");
    $dlugosc=count($tablica1);//pobiera argumenty z tablicy jak sizeof
    for($i=0;$i<$dlugosc;$i++){
        echo $tablica1[$i],"<br>";
    }
    $tablica2=array(3,4,5,8,7,6,9);
    echo "zawartośc tablicy przed sortowaniem<br>";
    foreach($tablica2 as $x){
        echo "$x";
    }
    echo "<br>";
    sort($tablica2);
    echo "tablica po sortowaniu: <br>";
    foreach($tablica2 as $x){
        echo "$x";
    } 
    //rsort-sortuje tablicę indeksowaną od min do max
    //asort po zawartości od min do max
    //arsort po zawartości od max do min
    //ksort po kluczu od min do max
    //krsort po kluczu od max do min
    //array_search(poszukiwana wartość,nazwa przeszukiwanej tablicy)

?>
</body>
</html>