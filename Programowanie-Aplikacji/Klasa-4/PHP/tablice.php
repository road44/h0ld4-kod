<?php
//tablice z recznymi ind
$tab[0]="tekst0";
$tab[1]="tekst1";
$tab[2]="tekst2";

print_r($tab[1]);
echo  "<br>";
var_dump($tab);

//TAB z roznymi typami danych
echo "<br>";
$mix=[15.75,"lekcja",-45,true];
$mix2=array(54,-7,"php",false);
//odwołanie do danej 
echo $mix[3];
echo "<br>";
echo $mix2[2];
echo "<br>";
//rok
$numbers=[2,0,2,6];
foreach($numbers as $r){
    echo $r;
}
echo "<br>";
//sortowanie
$imie=['Kuba','Zuza','Kasia','Filip','Iga','Adam'];
//print_r($imie);
echo ' <b> tablica wyjsciowa:</b>';

foreach($imie as $im){
    echo"$im ";
}
sort($imie);
echo "<br><b> tablica w porzadku:</b> ";
foreach($imie as $im){
    echo "$im ";
}
echo "<br>";
//liczby
$liczby=[-12,13,111,2,3,1,2.12,23];
$min=min($liczby);
$max=max($liczby);
echo "najmniejsza wartosc: $min";
echo "<br>";
echo "najwieksza wartosc: $max";
//roznice
$r=$min-$max;
echo "<br>roznica $r ";
echo "<br> ilosc elementow wynosi ".count($liczby);?>