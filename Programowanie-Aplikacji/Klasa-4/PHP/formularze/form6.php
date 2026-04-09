<?php
echo "Dane z formularza: ";
// nick
if(!empty($_POST['nick'])){
    echo "<br>Nick: ".$_POST['nick'];
}
else{
    echo '<br>uzupełnij pole nick';
}
if(!empty($_POST['wiek'])){
    echo "<br> Wiek: ".$_POST['wiek'];
}
else{
    echo "<br>Podaj wiek";
}



?>