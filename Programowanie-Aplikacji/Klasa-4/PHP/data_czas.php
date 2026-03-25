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



// $teraz = time();
// $zagodz=$teraz +3600;
// echo "Teraz $teraz, za godzine $zagodz $br";
// echo date("H:i", $zagodz);
// // data do przodu (jutro)


$d = date('d');
$m = date('m');
$y = date('Y');

$d++;

echo "$br jutro będzie $d/$m/$y $br";

// określenie daty musi być wartością typu string
// określenia: last/next/week/month/year/-2 weeks/ +7 days

$teraz = strtotime("now");
echo "$br Teraz: ";
echo date('H:i:s', $teraz);

$zatydzien = strtotime('next Wednesday');
echo "$br Za tydzień: ";
echo date("d.m.Y",$zatydzien)." mamy kartkówke";

$roktemu=strtotime("1 year ago");
echo "$br Rok temu: ";
echo date('d.m.Y',$roktemu)." uczyliśmy sie JS";

$zamies=strtotime('+30 days');
echo $br;
echo date('d.m.Y',$zamies)." organizujemy akadamie pożegnalną dla maturzystów";

$wczesniej=strtotime('4 years ago');
echo "$br w roku ";
echo date("Y", $wczesniej)."Chodziliśmy do SP";



echo '<hr><a href="index.php">Index</a>';
?>