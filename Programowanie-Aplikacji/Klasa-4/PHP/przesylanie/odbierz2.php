<?php
$b='<br>';

if($_FILES['obrazek']['error']>0){
    echo "Jakieś błędy : $b";
    if($_FILES['obrazek']['error']==1){
        echo "Zbyt duży plik $b";
    }
    else if($_FILES['obrazek']['error']==2){
        echo "Zbyt duży rozmiar pliku $b";
    }
    else if($_FILES['obrazek']['error']==3){
        echo "Plik częściowo wysłany $b";
    }
    else if($_FILES['obrazek']['error']==4){
        echo "Error, plik nie został przesłany $b";
    }
}
else{
    echo "Plik ".$_FILES['obrazek']['name']." został przesłany poprawnie";
}






echo "<hr>";
echo '<a href="wyslij2.html">Powrót</a>'.$b.'<a href="../index.php">Index</a>';
?>