<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petla for</title>

    <style>
        table, td{
            border: 1px solid black;
            border-color: blue;
        }
           
    </style>
</head>
<body>
    <?php

$pauza = "<br>";
$linia = "<hr>";
$oba = "<br><hr>";
for($i=1;$i<=5;$i++){
    echo "ferie tuż tuż <br>";
}
echo $linia;

for($a=1;$a<=50;$a++){
echo "$a ";
}
echo $oba;

for ($b=100;$b>=50;$b-=5){
    echo "$b ";
}
echo $oba;
$c=1;
while($c<=6){
    echo "Kasia ";
    $c++;
}
echo $linia;
$d = 0;
while($d<=10){
    echo "$d ";
    $d++;
}

echo $pauza;
$e =-1;
while($e++<10){
    // $e++;
    echo "$e ";
}
// echo "<!--test-->";
echo $oba;
// for parzuste -50 ver 1
echo "Tylko parzyste: ";
for($f=0;$f<=50;$f+=2){
    echo "$f ";
}
echo $linia;
// for parzyste 0-50 ver 2 z instrukcją wrunkową

for($g=0;$g<=50;$g++){
    if($g%2==0){
        echo "$g ";
    }
}
echo $oba;

// while parzyste co 2 od 50-100
$h = 50;
while($h<=100){
    echo "$h ";
    $h+=5;
}
echo $oba;

echo '<table>';

for($j=1;$j<=10;$j++){
    echo "<tr><td>$j</td><td>przebieg petli</td></tr>";
}
echo "</table>";

echo $oba;
// losowanie 5 liczb z zakresu 1-50
echo "Losowe liczby z zakresu 1-50: ";
for($t=1;$t<=5;$t++){
    $ran[$t]=rand(1,50);
    echo "$ran[$t] ";
}


echo $oba;

?>
<a href="../index.php">index</a>
</body>
</html>