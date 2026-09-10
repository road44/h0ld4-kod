<?php

// wielkość liter nie ma znaczenia
// +pl znaki

$wz_im='/^[a-złżA-ZŁŻ]{2,}$/';


if(!empty($_POST['imie']) && preg_match($wz_im, $_POST['imie'])){
    echo "Imię to: ". $_POST['imie'];
}
else if(!empty($_POST['imie']) && !preg_match($wz_im, $_POST['imie'])){
    echo "Błąd w imieniu";
}
else{
    echo "uzupełnij pole imie";
}

// mail

if(!empty($_POST['mail']) && filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
    echo "<br> Email to " . $_POST['mail'];
}
else if(empty($_POST['mail'])){
    echo "<br>Podaj adres email";
}
else{
    echo "<br>Błąd w adresie email";
}



echo '<hr>';
echo '<a href="reg4.html">Powrót</a><br>';
echo '<a href="../index.php">Index</a>';
?>