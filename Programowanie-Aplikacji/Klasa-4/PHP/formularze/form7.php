<?php


if(!is_numeric($_POST['imie']) && is_numeric($_POST['wiek']) && isset($_POST['zgoda'])){
    echo "Poprawne dane";
}
else{
    echo "ERROR";
}






?>