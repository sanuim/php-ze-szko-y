<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    $x=1;
    while(rand(1,100)!=21){
        $x++;

    }
    print("<b>21</b> wylosowano za ".$x." razem <br>");

    $suma=0;
    do{
        $y=rand(1,20);
        if($suma==0){
            $suma+=$y;
            print($y);
        }
        else{
            $suma+=$y;
            print(" + ".$y);
        }
        
    }while($suma<100);
    print(" = ".$suma);
?>
</body>
</html>