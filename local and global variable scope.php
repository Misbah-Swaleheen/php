<?php
    $num = 10; // global variable
    function number(){
      
       $num = 17; // local variable
        echo "Number is $num";
        
    }
    number();
    echo "<br>Number is $num";
?>

<?php
    // When you try to use global variable in a local scope you will get an error 
    $num1 = 10; // global variable
    function number1(){
      
      echo "<br>Number is $num1";
  
        
    }
    number1();
    echo "<br>Number is $num1";

?>


<?php
    // When you try to use local variable in a global scope you will get an error 
    
    function number2(){
        $num2 = 10; // local variable
      
        echo "<br>Number is $num2";
        
    }
    number2();
    echo "<br>Number is $num2";

?>

<?php
    // When you try to use global variable in a local scope then you should use global keyword with them 
    // after that you will print global variable in a local sceop and also modify it
    $num3 = 10; // global variable
    function number3(){
      global $num3;
      echo "<br>Number is $num3";
      $num3= 16;
        
    }
    number3();
    echo "<br>Number is $num3";

?>