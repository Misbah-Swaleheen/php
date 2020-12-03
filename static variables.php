<?php    
    echo "<h1>Using Variable Without Static Keyword</h1>";    
// When a function is completed, all of its variables are normally deleted.
    function Test()        
    {        
        $x=0;        
        echo "$x <br>";        
        $x++;        
    }            
    Test();        
    Test();        
    Test();    
?>


<?php   
      echo "<br><h1>Using Variable With Static Keyword</h1><br>";  
//  sometimes you want a local variable to not be deleted then use static keyword.     
    function Test2()        
    {        
        static $x=0;        
        echo "$x <br>";        
        $x++;        
    }            
    Test2();        
    Test2();        
    Test2();    
?>