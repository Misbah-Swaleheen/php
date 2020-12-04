<?php
     $age = 25;
     $sal = 45000;
     $status = "unmaried";
     $loan = $age >= 30 && ($sal >= 25000 || $status == "married"); 
     echo "Your age is $age <br>";
     echo "Your salary is $sal <br>";
     echo "Your martial status is $status <br>";
     echo "Your required conditions for loan aplication is ";
     var_dump($loan);
?>