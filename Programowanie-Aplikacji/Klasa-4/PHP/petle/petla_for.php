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

?>
</body>
</html>