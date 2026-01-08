<?php

$pauza = "<br> <br>";

$a=15;
$cos ="12";
$b = 3.75;
$liczby=[457,0,-5,789,4,-99,1,579];

echo gettype($a);
echo $pauza;
echo gettype($b);
echo $pauza;
echo is_float($b);
echo $pauza;
echo is_numeric($b);
echo $pauza;
echo isset($x); //nic nie zwraca (nawet 0)
echo $pauza;
var_dump($a);
echo $pauza;
var_dump($liczby); //zwraca typ i wartość
echo $pauza;
// echo $pauza;

if((gettype($a))==="double"){
    echo "to jest liczba rzeczywista";
}
else{
    echo "liczba innego typu niż dobule";
}
echo $pauza;


$bezwzgledna1=abs($a);
$bezwzgledna2=abs(-44);


echo "Wartość bezwzględna z $a to $bezwzgledna1";
echo $pauza;

echo "wartość bezwzględna: $bezwzgledna2";
echo $pauza;
// echo $pauza;

$pierkw=sqrt(25);

echo "pierwiastek kwadratowy z 25 to $pierkw";
echo $pauza;
$potega=pow(2,5);

echo "potęgowanie: $potega";
echo $pauza;

$zaokr=round(1.7889);

$zaokr2=round(0.015394215, 3);

echo "Liczby zaokrąglone: $zaokr oraz $zaokr2 ";
echo $pauza;

$dziel_calk=intdiv(10,3);

echo "Dzielenie całkowite 10/3 to $dziel_calk";
echo $pauza;

$dozaok=21.37;
$gora=ceil($dozaok);
$dol=floor($dozaok);
echo "ceil zaokrągla w góre np. $dozaok po zaokrągleniu to $gora. Floor zaokrągla w dół np. $dozaok to $dol";



?>