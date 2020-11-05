<!-- zadeklaruj w skrypcie 4 zmienne, uzyj tych zmiennych do wykonania operacji za pomocą operatorów, wyniki wysmwietl na ekranie (po 2 operatory dla każdej grupy) -->
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    echo "<h1>Operatory przypisania</h1>";
    echo '$a=5;<br>
    $b=7.3;<br>
    $c=true;<br>
    $d=534;<br>';
    $a=5;
    $b=7.3;
    $c=true;
    $d=534;
    echo "<h1>Operator konkatenacji</h1>";
    echo "a = ".$a."<br>b = ".$b."<br>c = ".$c."<br>d = ".$d;
    echo "<h1>Operatory bitowe</h1>";
    echo "~a = ".~$a;
    echo "<br> b >> 2 = ".($b << 2);
    echo "<h1>Operatory inkrementacji i dekrementacji</h1>";
    echo "a++ = ".($a++);
    echo "<br> ++b = ".(++$b);
    echo "<br>a-- = ".($a--);
    echo "<br> --b = ".(--$b);
    echo "<h1>Operatory porównania</h1>";
    echo 'if( $a > $b ) echo $a;<br>
    if( $a <= $b ) echo $b;<br><br>';
    if( $a > $b ) echo $a;
    if( $a <= $b ) echo $b;
    echo "<h1>Operatory arytmetyczne</h1>";
    echo 'a + b = '.($a+$b);
    echo '<br>d - b = '.($d-$b);
    echo "<h1>Operatory logiczne</h1>";
    echo 'a || b = '.($a||$b);
    echo '<br>!c = '.!$c;

    
?>
</body>
</html>