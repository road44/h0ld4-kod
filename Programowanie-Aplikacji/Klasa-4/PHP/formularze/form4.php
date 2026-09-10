<?php

$login ='silnyDrwal';
$haslo = 'Las44';


if($_POST['login']===$login && $_POST['haslo']===$haslo){
    echo "Zalogowano do systemu";
}
else{
    echo "Błąd";
}


?>