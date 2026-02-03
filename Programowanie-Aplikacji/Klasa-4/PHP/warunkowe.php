<?php
// skrócona instrukcja warunkowa
$linia = "<hr>";
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
    echo "kobiety górą!!!";
}
else if ($losK==$losM){
    echo "remis";
}
else{
    echo "chopy wygrały";
}
echo $linia;
?>