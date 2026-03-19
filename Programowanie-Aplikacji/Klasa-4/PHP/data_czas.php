<?php
$br = '<br>';
echo time();
echo $br;

$data = getdate();
$dzien = $data["mday"];
$miesiac=$data['mon'];
$rok = $data['year'];
echo "Bierząca data to: $dzien-$miesiac-$rok r.";




?>