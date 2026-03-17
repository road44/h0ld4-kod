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









echo '<hr><a href="index.php">index</a>';

?>