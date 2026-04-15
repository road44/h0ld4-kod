<?php
$dane=$_POST['dane'];


$wz = '/^[a-zA-z]{3,}\s[a-zA-Z]{2,}$/';


if(preg_match($wz,$dane))


echo '<hr>';
echo '<a href="reg2.html">Powrót</a><br>';
echo '<a href="../index.php">Index</a>';
?>