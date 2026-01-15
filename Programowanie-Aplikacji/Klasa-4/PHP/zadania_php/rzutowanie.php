<!-- rzutowanie polega na zmianie typu danych/zmiennychrzutowanie-lekcja -->


<?php

$pauza = "<br>";
// przykład 1
$liczba=12.75;

echo (int)$liczba;
echo $pauza;

// przykład 2

$x=10;
$wynik1=(float)$x;
$wynik2=(string)$x;

echo $wynik1 . $pauza;
// echo $pauza . $pauza;
echo $wynik2 . $pauza;
echo $pauza;
echo gettype($wynik1) . $pauza;
echo gettype($wynik2) . $pauza;

echo $pauza;

?>