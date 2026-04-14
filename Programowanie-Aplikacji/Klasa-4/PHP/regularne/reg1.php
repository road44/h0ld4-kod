<?php

$txt="nauka języka PHP w klasie czwartej";

if(preg_match('(język|php|klasa|Nauka)',$txt)){
    echo "Jest dopasowanie-słowo występuje w zimnnej";
}
else{
    echo "Brak dopasowana";
}

?>