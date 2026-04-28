<?php
// pola imie i nazwisko od wielkich liter z polskimi znakami

$b = "<br>";

$wzIM = '/^[A-ZŻŁ]{1}[a-zółż]{2,}$/u';
$wzNZ='/^[A-ZĆŚŁŻŹĄÓ]{1}[a-zżółżąęśćźń]{1,}$/u';

if(!empty($_POST['imie'])&&preg_match($wzIM,$_POST['imie'])){
    echo "Imie to: " . $_POST['imie'] . $b;
}
else if (empty($_POST['imie'])){
    echo "Nie wpisano imienia $b";
}
else{
    echo "Źle wpisano imie $b";
}

if(!empty($_POST['nazwisko'])&&preg_match($wzNZ,$_POST['nazwisko'])){
    echo "Nazwisko to: " . $_POST['nazwisko'] . $b;
}
else if (empty($_POST['nazwisko'])){
    echo "Nie wpisano nazwiska $b";
}
else{
    echo "Źle wpisano nazwisko $b";
}

if(isset($_POST['plec'])){
    echo "Płeć: " . $_POST['plec'] . $b;
}
else{
    echo 'Nie wybrano płci' . $b;
}

// wiek
if($_POST['wiek']<18){
    echo "<b><font color='red'>Potrzebujesz zgody rodzica</font></b> $b";
}
// województwo


if(isset($_POST['woj'])){
    foreach($_POST['woj'] as $w){
        echo "Województwo to: " . $w . $b;
    }
}
else {
    echo "Nie wybrano województwa $b";
}

// telefon

$wzTel = '/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/';

if(!empty($_POST['tel'])&&preg_match($wzTel,$_POST['tel'])){
    echo "Numer telefonu to: " . $_POST['tel'] . $b;
}
else if(empty($_POST['tel'])){
    echo "Nie wpisano numeru telefonu $b";
}
else{
    echo "Numer telefonu wpisany niepoprawnie $b";
}

// mail


if(!empty($_POST['mail']) && filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
    echo "Mail to: " . $_POST['mail'].$b;
}
else if(empty($_POST['mail'])){
    echo "Muszisz podać maila $b";
}
else{
    echo "Wprowadzono nieprawidłowy mail$b";
}


if(!isset($_POST['zgoda'])){
    echo "<b><font color='red'>Muszisz wyrazić zgode</font></b> $b";
}


echo '<hr>';
echo '<a href="reg5.html">Powrót</a><br>';
echo '<a href="../index.php">Index</a>';
?>