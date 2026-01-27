<?php
$pauza = "<br> <br>";

echo "rozpoczynamy nauke w <b>PHP</b>";
echo $pauza;


echo "pierwsza linijka <br> druga linijka tekstu";

echo $pauza;

echo "Typy danych w php <br>";
echo '<ul style="list-style-type: square;"><li>intiger</li><li>float</li><li>double</li><li>string</li></ul>';


$a = 10;
$b = 5;
$c = ($a - $b) * 2;

echo "$c";
echo $pauza;
echo '<span style="color:blue;">Pamiętaj. PHP zna kolejność wykonywania działań</span>';
echo $pauza;

$x = 4;
$y = 4;
$z =4;
$w =4;

echo 'Wartość zmiennej $x wynosi ' . $x +=3;
echo '<br>Wartość zmiennej $y wynosi ' . $y -+2;
echo '<br> Wartość zmiennej $z wynosi ' . $z *=2;
echo '<br> Wartość zmiennej $w wynosi ' . round($w /= 3, 1);
echo $pauza;

$zsp = "Zespół ";
$szk = "Szkół ";
$pol ="Poligraficzno-Mechanicznych";

echo "Moja szkoła to " . $zsp . $szk . $pol;


?>