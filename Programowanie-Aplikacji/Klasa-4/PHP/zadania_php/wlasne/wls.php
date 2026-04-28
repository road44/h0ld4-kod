<?php
echo "Dane z formularza: <br>";

$b = "<br>";
if(!isset($_POST['zgoda'])){
    echo "<font color='red'>Zaakceptuj regulamin</font>";
}
else{


if(!empty($_POST['art'])){
    echo "Podany artysta to: " . $_POST['art'] . $b;
}
else{
    echo "Nie podano artysty $b";
}

if(!empty($_POST['czas'])){
    echo "Słuchasz go: " . $_POST['czas'] . "lat $b";
}
else{
    echo "Nie podano czasu $b";
}

$wzTel = '/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/';

if(!empty($_POST['tel'])&&preg_match($wzTel,$_POST['tel'])){
    echo "Podany numer telefonu to: " . $_POST['tel'] . $b;
}
else if(empty($_POST['tel'])){
    echo "Nie podano numer telefonu $b";
}
else{
    echo "Nie prawidlowy numer $b";
}

if(isset($_POST['fest'])){
    echo "Wybrane festiwale to: ";
    foreach($_POST['fest'] as $f){
        echo "<li> $f </li>";
    }
}
else{
    echo "Nie wybrano żadnych festiwali $b";
}

if(isset($_POST['news'])){
    echo "Zapisać do newslettera: " . $_POST['news'] .$b;
}
else{
    echo "Nie wybrano żadnej opcji $b";
}

if(!isset($_POST['zgoda'])){
    echo "Zaakceptuj regulamin";
}
}
echo '<hr><a href="wls.html">Powrót</a>'
?>