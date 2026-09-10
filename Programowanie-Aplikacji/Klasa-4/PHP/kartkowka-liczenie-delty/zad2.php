<?php

$ocena = "dop";


if($ocena == "ndst" or $ocena == "dop"){
    echo "słabo do poprawy";
}
else if($ocena == "dst"){
    echo "nie jest źle";
}
else if($ocena == "db"){
    echo "jest ok";
}
else if($ocena == "cel" or $ocena == "bdb"){
    echo "brawo nauczyłeś sie";
}
else{
    echo "wpisałeś złą ocene";
}


echo '<br><a href="index.php">index</a> <br>';



?>