<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funkcje</title>
</head>
<body>
    

<?php
$linia ="<hr>";
$pauza ="<br>";
// przykład 1
function hello(){
    echo "Witaj nieznajomy!";
}
hello();
// przykład 2. sumowanie liczb, funkcja z dwoma argumentami

function sumowanie($a, $b){
    $suma = $a + $b;
    echo "suma liczb wynosi: $suma <br>";
}
echo $pauza;
sumowanie(12,10);
sumowanie(5,12);
sumowanie(-12,45);

echo $linia;
// przykład 3. funkcja obliczająca rabat
?>



</body>
</html>