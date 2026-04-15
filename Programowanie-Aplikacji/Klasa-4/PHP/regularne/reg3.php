<?php
// imie i naswisko od wielkiej litery
// mogą pojawić się polskie znaki → flaka "u" 

// $wz = '/^[A-ZŁŻ]{1}[a-zółż]{2,}\s[A-ZŁŚĆŻŹĄŁ]{1}[a-zęóśżźćńł]{1,}$/u';
$wz='/^[ \pl -]+$/u';


if(preg_match($wz,$_POST['dane'])){
    echo "Poprawne dane";
}
else{
    echo 'Błąð. Imie i nazwisko powinno zaczynać się od wielkiej litery';
}





echo '<hr>';
echo '<a href="reg3.html">Powrót</a><br>';
echo '<a href="../index.php">Index</a>';
?>