<?php
    // $a = 10;
    // $b = 14;
    // $c = 10;

    // $d = ($a == $b || $a == $c);
    // var_dump($d);


    $age = 25;
    $sal = 45000;
    $loan = $age >= 30 || $sal >= 25000;
    echo "Your age is $age <br>";
    echo "Your salary is $sal <br>";
    echo "Your required conditions for loan aplication is ";
    var_dump($loan);
?>