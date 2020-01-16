<?php 

echo ("Welke operatie wil je uitvoeren? (+,-,%)"). PHP_EOL;
$som = readline("");
echo ("Eerste getal"). PHP_EOL;
$a = is_numeric(readline(""));
echo ("Tweede getal"). PHP_EOL;
$b = is_numeric(readline(""));



if($som === "+"){

    $ans = $a + $b;
    echo  ("Uw antwoord is:"). $ans ;

} else if($som === "-"){

    $ans = $a - $b;
    echo  ("Uw antwoord is: "). $ans ;

} else if($som === "%"){

    $ans = $a % $b;
    echo ("Uw antwoord is: "). $ans ;
    
}