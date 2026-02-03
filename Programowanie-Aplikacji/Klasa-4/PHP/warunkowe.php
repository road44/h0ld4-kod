<?php
// skrócona instrukcja warunkowa
$linia = "<hr>";
$pauza = "<br>";
$a=-2;
echo ($a>0) ? "Liczba jest dodatnia" : "Liczba jest ujemna";

echo $linia;
// klasyczna instrukcja warunkowa
$b=15;
if($b>0){
    echo '$b jest dodatnia';
}
else{
    echo '$b jest ujemna';
}


echo $linia;

$x=15;
$y=20;

if($x==$y){
    echo "są takie same";
}
else if($x>$y){
   echo "$x jest większy od $y";
}
else{
echo "$y jest większy od $x";
}

echo $linia;
$losK=rand(1,6);
$losM=rand(1,6);
if($losK>$losM){
    echo "kobiety górą!!! <br>";
}
else if ($losK==$losM){
    echo "remis <br>";
}
else{
    echo "chopy wygrały <br>";
}

echo "<br> Kobiety: $losK. Chopy: $losM";

echo $linia;

$a = 1.5;
$b=15;
echo $a===$b;
echo $pauza;
echo $a<>$b;
echo $pauza;
$a += 0.5;
echo $a<$b ? "prawda" : "$a jest większe niż $b";
echo $linia;
$a+=3;
if($a>10 && $a>$b){
    echo "dwa warunki spełnione";
}
else{
    echo "nie spełnione warnukni";
}

// sprawdzanie typu zmiennej

?>