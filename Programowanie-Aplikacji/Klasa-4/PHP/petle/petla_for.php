<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petla for</title>
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
$e =0;
while($e++<=10){
    // $e++;
    echo "$e ";
}
?>
</body>
</html>