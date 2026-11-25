<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <header>
        <h2>Wędkuj z nami!</h2>
    </header>
    <main>
        <section id="lewa"><img src="ryba1.jpg" alt="ryba"></section>
        <section id="prawa">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <?php

            $link = mysqli_connect('127.0.0.1', 'root', '', 'ryby');

            $pyt = "SELECT id,nazwa,wystepowanie from ryby where styl_zycia=2;";

            $odp = mysqli_query($link, $pyt);

            while ($row = mysqli_fetch_row($odp)) {
                echo "<pre>";
                print_r($row[0] . ". " . $row[1] . "występuje w " . $row[2]);
                echo "</pre>";
            }
            ;

            ?>
            <ol>
                <li><a href="https://wedkuje.pl" target="_blank">Odwiedź także</a></li>
                <li><a href="https://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
            </ol>
        </section>
    </main>

    <footer>
        <p>Strone wykonał hołda</p>
    </footer>

</body>

</html>