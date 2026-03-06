<?php


function pokazNieparzyste($a, $b) {
    for ($i = $a; $i <= $b; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
}

pokazNieparzyste(20,37);
echo '<hr>';
pokazNieparzyste(10,12);
echo '<hr>';






echo '<br><a href="index.php">index</a> <br>';

?>