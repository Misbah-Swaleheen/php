<?php

    // case sensitive
    $password_saved = "123";

    $password_given = "abc";
    
    $result = strcmp($password_given ,$password_saved );

    if($result == 0){
        echo "same";
    }
    else{
        echo "not same";
    }
echo "<br>";

    //case insensitive
    $name1 = "MazHar";
    $name2 = "mAzhAr";

    $res = strcasecmp($name1, $name2);

    if($res == 0){
        echo "same";
    }
    else{
        echo "not same";
    }

?>