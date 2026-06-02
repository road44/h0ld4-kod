<?php
$b="<br>";

function spr_typ(){
    if(is_uploaded_file($_FILES['obrazek']['tmp_name'])){
        if($_FILES['obrazek']['type']!="image/jpeg"){
        echo "Nie właściwy format pliku $b";
        }
        else {
            echo "Plik wysłano $b";
        }
    
    }
    else{
        echo "Nie przesłano pliku $b";
    }
}

spr_typ();








echo "<hr>";
echo '<a href="wyslij3.html">Powrót</a>'.$b.'<a href="../index.php">Index</a>';
?>