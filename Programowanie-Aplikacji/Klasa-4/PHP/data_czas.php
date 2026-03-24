<?php
$br = '<br>';
echo time();
echo $br;

$data = getdate();
$dzien = $data["mday"];
$miesiac=$data['mon'];
$rok = $data['year'];


if($miesiac < 10){
    $miesiac=0 . $data['mon'];
}
else if($dzien < 10){
    $dzien =0 . $data['mday'];
}
else if($dzien < 10 and $miesiac < 10){
    $dzien =0 . $data['mday'];
    $miesiac=0 . $data['mon'];

}


echo "Bierząca data to: $dzien-$miesiac-$rok r.";
echo $br;


echo date('Y-m-d');
echo $br;
echo date("d-m-Y");
echo $br;
echo date('G:i:s') . $br;
echo date('H-i-s') . $br;
echo date('Y-m-d g:i:sa ').$br;

echo $br;

echo "dziś jest: ".date("l").$br;

$dnipl = ["Monday"=>'poniedziałek','Tuesday'=>'wtorek','Wednesday'=>'środa', 'Thursday'=>'czwartek','Friday'=>'piątek'];

echo "dziś jest: ".$dnipl[date('l')].". ".date('d/m/Y').$br;



$teraz = time();
$zagodz=$teraz +3600;
echo "Teraz $teraz, za godzine $zagodz $br";
echo date("H:i", $zagodz);
// data do przodu (jutro)













echo '<hr><a href="index.php">Index</a>';
?>