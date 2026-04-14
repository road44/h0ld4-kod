<?php
echo "Dane z formularza: ";
if(isset($_POST['zgoda'])){
// nick
if(!empty($_POST['nick'])){
    echo "<br>Nick: ".$_POST['nick'];
}
else{
    echo '<br>uzupełnij pole nick';
}
// miejscowosc
if(empty($_POST['miasto'])){
    echo '<br> brak miejscowości';
    }
else{
    echo "<br>Miejscowość: ".$_POST['miasto'];
    }
// wykształcenie

if(isset($_POST['wyk'])){
    echo "<br>wykształcenie: ".$_POST['wyk'];
}




}
else{
    echo "Należy zapoznać sie z regulaminem";
}
?>