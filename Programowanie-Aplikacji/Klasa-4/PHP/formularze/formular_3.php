<?php

if($_POST["imie"]=="" OR $_POST["wiek"]==null){
    echo "brak potrzebnych danych";
}
else{
    echo $_POST["imie"]."<br>".$_POST["wiek"]."<br>".$_POST["miejsce"];}
?>