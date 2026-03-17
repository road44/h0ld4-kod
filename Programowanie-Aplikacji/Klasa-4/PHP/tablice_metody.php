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

// map dane z tablicy wyjściowej są przypisane do nowej zmiennej i na nich wykonujemy jakieś działanie - tutaj podnosimy do potęgi
$liczby =[0,1,2,3,4];
$potliczby=array_map(fn($liczba)=>($liczba)**2, $liczby);
echo "<pre>";
print_r($potliczby);
echo "</pre><hr>";






// filter - odsciewa z tablicy te elementy których nie chcemy czyli nieparzyste
$liczby1 = [1,2,3,4,5,6];
$parzysteliczby = array_filter($liczby1, fn($liczba)=>$liczba%2 === 0);
echo "<pre>";
print_r($parzysteliczby);
echo "</pre><hr>";










echo '<hr><a href="index.php">index</a>';

?>