<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    function wypisz(){
        echo "wypisanie funkcji<br>";
    }
    wypisz();
    function wypisanie1($znak,$dlugosc){
        for($i=0;$i<$dlugosc;$i++)
            print($znak);
            print("<br>");
    }
    wypisanie1("#",34);
    wypisanie1("@",45);
    $z=1;
    function globalna(){
        global $z; //odwołuje się do zmiennej globalnej czyli tej poza funkcją
        echo "wartość zmjiennej \$z wynosi $z <br>";
    }
    globalna();
?>
</body>
</html>