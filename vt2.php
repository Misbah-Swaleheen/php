<?php
    $salary = 25000;
    $sale = 200000;
    const commision_pert = 10;
    
    $commision = ($sale * commision_pert)/ 100;
    $deduction = 500;
   define("INCOME", $salary + $commision - $deduction) ;

    echo "My income is ".INCOME;

?>