<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->
 
<!-- topic 1 constant -->
<?php
    define('PI', 3.14);
    const SHI = 9.0;
    echo PI;
    echo SHI;
?>

<!-- topic 2 functions -->

<?php 
    function square(int $num )
    {
        # code...
        return $num * $num;
    }

    $ans = PI * square(5);
    echo "<br> Answer is ". $ans
?>


<?php 
    class fan {
        
    }
    class wallfan extends fan{
       public $weight = 0;
       

    }

    $f = new wallfan;
?>

<?php 
    class jungle{
       public $lions = [];
    }

    class animal{
        public $living = true;
        public $name = '';
        
    }
    class lion extends animal{
        public $hunting_jaws = true;

        public function hunt()
        {
            # code...
            echo "hunt";
        }
    }
?>


