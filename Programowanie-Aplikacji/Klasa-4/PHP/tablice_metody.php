<?php

$x=['banan','kiwi','agrest'];

$x[0]="mango"; //zastepowanie
print_r($x);
echo "<hr>";

$x[3]="papaja"; //dodanie na 3 index
$x[6]="jagoda"; //dodanie na 6 index
print_r($x);
echo "<hr>";

// push doda element na koniec lub kilka
array_push($x,'gruszka');
print_r($x);
echo "<hr>";


// pop usuwa ostatni element
array_pop($x);
print_r($x);
echo "<br>";

// shift usunie pierwszy element
array_shift($x);
print_r($x);
echo "<br>";


// unshift doda element na początek
array_unshift($x,'mango');
print_r($x);
echo "<hr>";

// replace podmienia elementy pierwszej tav na elementy z drugiej
$y=['maliny','granat','kaki'];
print_r(array_replace($x,$y));
echo "<hr>";

// shuffle wymiesza zawartość tabeli
shuffle($y);
print_r($y);
echo "<hr>";

// sort
sort($x);
print_r($x);
echo "<hr>";

// implode zwraca wartość string elementów tablicy
echo implode("/", $x);
echo "<hr>";


echo '<hr><a href="index.php">index</a>';

?>