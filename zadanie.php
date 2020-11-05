<!-- Zadeklaruj 3 zmienne i nadaj im wartości, następnie spprawdź czy trójkąt z którego zrobimy te boki jest równoramienny, równoboczny, różnoboczny -->
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    $a=11;
    $b=11;
    $c=11;
    if(($a+$b)>$c && ($c+$b)>$a){
        if($a==$b && $b==$c) print("Trójkąt jest równoboczny");
        elseif($a==$b || $b==$c || $a==$c) print("Trójkąt jest równoramienny");
        else print("Trójkąt jest różnoboczny");
    }
    else print("Z tych boków nie da się utworzyć trójkąta");
?>
</body>
</html>