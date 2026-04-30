<?php
$b = '<br>';
echo "<b>Informacje o pliku :<b>$b";

echo $_FILES['plik1']['type'].$b;

echo $_FILES['plik1']['size'].$b;

echo $_FILES['plik1']['name'].$b;

echo $_FILES['plik1']['tmp_name'].$b;

echo $_FILES['plik1']['error'].$b;
echo "<hr>";
?>