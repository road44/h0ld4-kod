<?php

$txt="Rozpoczynamy nauke PHP.";

$dl=strlen($txt);

echo "Długość naszego ciągu wynosi $dl znaków.";


$pierwsza=substr($txt,0,1) ;

echo "<br> Pierwsza litera ze zdania to $pierwsza";

$kawalek=substr($txt,19,3 );

echo"<br> $kawalek";

$pauza="<br>";

echo $pauza;

$wielkie=strtoupper($txt);
echo"Zamiana na wielkie litery $wielkie";
$male=strtolower($txt);
echo "$pauza Zamiana na małe litery: $male";

$odwrocony=strrev($txt);

echo "$pauza Tekst od tyłu: $odwrocony";


?>

