<!doctype html>
<html>
    <head>
        <title>Wynajmujemy samochody</title>
        <meta charset="utf-8"/>
        <link rel="Stylesheet" href="styl.css"/>
    </head>
    <body>
        <div id="baner">
            <h1>Wynajem Samochodów</h1>
        </div>
        <div id="lewy">
            <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
            <?php
                $c=mysqli_connect('localhost','root','','samochody');
                $zap1=mysqli_query($c,"select id,model,kolor from Samochody WHERE marka like 'Toyota' and rocznik like 2014 ;");
                while($r=mysqli_fetch_assoc($zap1)){
                    echo $r['id'].'Toyota'.$r['model'].'. Kolor: '.$r['kolor'].'<br>';
                }
            ?>
            <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
            <?php
                $zap2=mysqli_query($c,"select id,marka,model,rocznik from Samochody;");
                if($zap2->num_rows>0)
                {
                    while($r=$zap2->fetch_assoc())
                    {
                        echo $r['id'].' '.$r['marka'].' '.$r['model'].' '.$r['rocznik'].'<br>';
                    }
                }
            ?>
        </div>
        <div id="srodkowy">
            <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
            <?php
                $zap3=mysqli_query($c,"SELECT Samochody_id,model,telefon from samochody as s inner join zamowienia as z on s.id=z.Samochody_id ");
                if($zap3->num_rows>0)
                {
                    while($r=$zap3->fetch_assoc())
                    {
                        echo $r['Samochody_id'].' '.$r['model'].' '.$r['telefon'].'<br>';
                    }
                }
                mysqli_close($c);
            ?>
        </div>
        <div id="prawy">
            <h2>NASZA OFERTA</h2>
            <ul>
                <li>Fiat</li>
                <li>Toyota</li>
                <li>Opel</li>
                <li>Mercedes</li>
            </ul>
            <p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a></p>
            <p>autor strony: 00000000000</p>
        </div>
    </body>
</html>