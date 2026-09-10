<?php

$a = 100.5;
$b = 90;
$c = 44;

$typa = gettype($a);
$typb = gettype($b);
$typc = gettype($c);

echo '<hr>';

if($typa == 'integer' and $typb == 'integer' and $typc == 'integer'){
    if($a > $b and $a>$c){
    echo "$a jest największe";
    }
    else if($b > $a and $b > $c){
    echo "$b jest największe";
    }
    else if($c > $a and $c > $b){
    echo "$c jest największe";
    }
    else if($a == $b and $a > $c){
        echo "$a i $b są równa i są większe od $c";
    }
    else if($c == $b and $b > $a){
        echo "$b i $c są równa i są większe od $a";
    }
    else{
        echo "$a i $c są równe i są większe od $b";
    }

}
else if($typa != 'integer'){
    echo 'wprowadziłeś złe dane w zmiennej $a';
}
else if($typb != 'integer'){
    echo 'wprowadziłeś złe dane w zmiennej $b';
}
else{
    echo 'wprowadziłeś złe dane w zmiennej $c';
}







echo '<br><a href="index.php">index</a> <br>';

?>