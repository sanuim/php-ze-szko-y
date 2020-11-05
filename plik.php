<!-- napisz skrypt który będzie wyświetlał dzień tygodnia w podanej postaci : "dzisiaj jest środa" -->
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
    $dzien_tygodnia=date("l");
    switch($dzien_tygodnia){
        case "Monday" : $dzien_tygodnia="poniedziałek";
        break;
        case "Tuesday" : $dzien_tygodnia="wtorek";
        break;
        case "Wednesday" : $dzien_tygodnia="środa";
        break;
        case "Thursday" : $dzien_tygodnia="czwartek";
        break;
        case "Friday" : $dzien_tygodnia="piątek";
        break;
        case "Saturday" : $dzien_tygodnia="sobota";
        break;
        case "Sunday" : $dzien_tygodnia="niedziela";
        break;
    }
    echo "Dzisiaj jest $dzien_tygodnia";
?>
</body>
</html>