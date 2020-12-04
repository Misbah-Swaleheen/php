<?php
  $a = 11;
  $b = 11;
  echo "<h1>Examples of Comparision Operators</h1> <br>";
  $c = $a<$b ;
  echo "$a is less than $b is ";
  var_dump($c);
 
  $d = $a>$b ;
  echo "<br> $a is greater than $b is "; 
  var_dump($d);

  $c = $a<=$b ;
  echo "<br> $a is less than or equal to $b is "; 
  var_dump($c);
 
  $d = $a>=$b ;
  echo "<br> $a is greater than or equal to $b is "; 
  var_dump($d);
 
  $d = $a==$b ;
  echo "<br> $a is equal to $b is "; 
  var_dump($d);
  
  $d = $a===$b ;
  echo "<br> $a is identical to $b is "; 
  var_dump($d);
  
  $d = $a!=$b ;
  echo "<br> $a is not equal to $b is "; 
  var_dump($d);
 
  $d = $a!==$b ;
  echo "<br> $a is not identical to $b is "; 
  var_dump($d);

  $d = $a<>$b ;
  echo "<br> $a is not equal to $b is "; 
  var_dump($d);

  $d = $a <=> $b ;
  
  echo "<br>$a is spaceship to $b is ".($a <=> $b)."<br>";       
?>