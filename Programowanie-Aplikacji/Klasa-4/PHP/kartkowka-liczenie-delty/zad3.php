<?php

function delta($a,$b,$c){
$delta = pow($b, 2)-4*$a*$c;
// echo $deltaw.'<br><br>';
if ($delta > 0) {
    $x1 = (-$b - sqrt($delta)) / (2 * $a);
    $x2 = (-$b + sqrt($delta)) / (2 * $a);
    echo "miejsca zerowe to $x1 oraz $x2";
}
else if ($delta == 0) {
    $x0 = -$b / (2 * $a);
    echo "jedyne miejsce zerowe to $x0";
}
else {
    echo 'nie ma miejsc zerowych';
}


}



delta(11,5,-10);
 echo '<hr>';
 delta(90,150,-50);

echo '<hr><a href="index.php">index</a> <br>';

?>