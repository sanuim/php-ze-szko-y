<!DOCTYPE html>
<html>
    <head>
        <title>Podróże dalekie i bliskie</title>
        <meta charset="utf-8"/>
        <link rel="Stylesheet" href="styl6.css"/>
    </head>
    <body>
        <div id="cookies">
        <?php
        if(!isset($_COOKIE['ciastko'])){
            setcookie('ciastko',1,time()+3600);
            echo "<p>Witaj! nasza strona używa ciasteczek</p><br>";
        }
        else{
            echo "<p>Witaj ponownie na naszej stronie</p><br>";
        }

        /*
        Zasada działanie pliku cookie:
        1) Nawiązanie połaczenia z serwerem i wysłanie do przeglądarki nagłówka setcookie, który zawiera plik z ciasteczkiem
        2)Zapisanie pliku na dysku użytkownika
        3)Przy kolejnym połączeniu wysłanie pliku przechowywanego na dysku

        Tworzenie pliku z ciastkiem setcookie() może zawierac argumenty: nazwa, wartość, czas trwania, ścieżka, domena,bazpieczeństwo, http

        setcookie(nazwa,wartość,czastrwania,ścieżka,domena,bazpieczeństwo, http);

        Argumentem który musi się pojawić jest nazwa

        bezpieczeństwo i http przyjmują atrybuty true albo false
        jeśli true to dostęp do cookie jest tylko przez https

        http = true to jest dostępny tylko przez http

        Wykorzystując cookie określ datę ostatnich odwiedzin strony
        można sprawdzić 30 dni wstecz

        

        */
        if(!isset($_COOKIE['czas_odwiedzin'])){
            setcookie('czas_odwiedzin',date("Y-m-d H:i:s"),time()+259200);
            echo "Witak na naszej stronie!";
        }
        else{
            echo "Witaj ponownie! Ostatni raz nas odwiedziłeś: ".$_COOKIE['czas_odwiedzin'];
            setcookie('czas_odwiedzin',date("Y-m-d H:i:s"),time()+259200);
        }
        ?>
        </div>
    </body>
</html>