<!-- 
1. Skrypt na podstawie danych pobranych z tablicy zwracanych przez funkcję getdate() wyświetla bierzącą datę
w dacie zostana podanea nazwa miesiąca w postaci tekstu w języku polskim 
2. Napisz skrypt wyswiwetlający liczbe dni i godzin które upłynęły od początku roku i liczbę dni które pozostały do początku roku
3. Napisz skrypt obliczający i zwracjący wynik ile jest w tablicy elementów parzystych i nieparzystych.
Posortuj elementy tABLICY OD NAJMNIEJSZEJ DO NAJWIĘKSZEJ NAPIERW PARZYSTE A POTEM NIEPARZYSTE
8 elementów
-->
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    //1
    $data=getdate();
    $godzin=date("G");
    $dzien=$data["mday"];
    $miesiac=$data["mon"];
    $rok=$data["year"];
    $miesiac_pl = array(1 => 'Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień');
    echo "Data: $dzien $miesiac_pl[$miesiac] $rok<br>";
    //2
    $miesiac_dni = array(1 => 31,28,31,30,31,30,31,31,30,31,30,31);
    $ilosc_dni=0;
    for($i=1;$i<$miesiac;$i++){
        $ilosc_dni+=$miesiac_dni[$i];
    }
    $ilosc_dni+=$dzien-1;
    echo "<br>Od początku roku upłynęło $ilosc_dni dni i $godzin godzin<br>";
    $ilosc_dni=(365-$ilosc_dni);
    $godzin=24-$godzin;
    echo "Do początku roku pozostało $ilosc_dni dni i $godzin godzin<br>";
    //3
    $tablica=array(23,5,2,8,2,4,9,1);
    $parzyste=0;
    $nieparzyste=0;
    $tablicap=array();
    $tablican=array();
    $p=0;$n=0;
    echo "<br>Nieposortowana tablica: ";
    for($i=0;$i<8;$i++){
        echo $tablica[$i].", "; 
    }
    for($i=0;$i<8;$i++){
        if($tablica[$i]%2==0) {
            $parzyste++;
            $tablicap[$p]=$tablica[$i];
            $p++;
        }
        else {
            $nieparzyste++;
            $tablican[$n]=$tablica[$i];
            $n++;
        }
    }
    sort($tablicap);
    sort($tablican);
    echo "<br>Posortowana tablica: ";
    for($i=0;$i<$p;$i++){
        echo $tablicap[$i].", ";
    }
    for($i=0;$i<$n;$i++){
        echo $tablican[$i].", ";
    }
?>
</body>
</html>