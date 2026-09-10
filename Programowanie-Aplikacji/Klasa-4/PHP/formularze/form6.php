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
// else if(!empty($_POST['wiek'])&& $_POST['wiek']<18){
//     echo "<br> musisz byc pełnoletni";
// }
else{
    echo "<br>Podaj wiek";
}

// if(!empty($_POST['kurs'])){
//     echo "<br>Wybrane kursy: ". implode(", ",$_POST['kurs']);
// }
// else{
//     echo "<br>Nie wybrano kursu";
// }


if(isset($_POST['kurs'])){
    echo "<br>Ilośc wybranych kursów: ". count($_POST['kurs']). "<br>Wybrane kursy to: ";
    foreach($_POST['kurs'] as $k){
        echo "<li> $k </li>";
    }
}
else{
    echo "Nie wybrano kursów";
}


if(isset($_POST['jezyk'])){
    echo "<br>Ilośc wybranych jezykow: ". count($_POST['kurs']). "<br>Wybrane jezyki to: ";
    foreach($_POST['jezyk'] as $j){
        echo "<li> $j </li>";
    }
}
else{
    echo "Nie wybrano jęzki";
}



// if(!empty($_POST['jezyk'])){
//     echo "<br>Wybrane jezyki: ". implode(", ",$_POST['jezyk']);
// }
// else{
//     echo "<br>Nie wybrano jezyków";
// }
?>