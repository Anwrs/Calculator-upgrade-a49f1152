<?php 

echo "Welke operatie wil je uitvoeren? (+,-,%)" . PHP_EOL;
$vraag = readline("");

if ($vraag === "+"){
    
    $som = "+";

} else if ($vraag === "-"){
    
    $som = "+";

} else if ($vraag === "%"){
    
    $som = "%";

} else {

    echo $vraag . " Is geen operator";
    exit;

}

echo "Eerste getal" . PHP_EOL;
$a = readline("");

if (is_numeric($a)){

} else {
    echo  $a . " Is geen getal";
    exit;
}

echo "Tweede getal" . PHP_EOL;
$b = readline("");

if (is_numeric($b)){ 

} else {
    echo  $b . " Is geen getal";
    exit;
}


if($som === "+"){

    $ans = $a + $b;
    echo  "Uw antwoord is: ". $ans ;

} else if($som === "-"){

    $ans = $a - $b;
    echo  "Uw antwoord is: ". $ans ;

} else if($som === "%"){

    $ans = $a % $b;
    echo "Uw antwoord is: ". $ans ;
    
} 