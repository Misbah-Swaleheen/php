<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $odds = [1,  3,  5, 7, 9 ,11, 13, 15, 17, 19];
    $evens = [2,  4,  6, 8, 10 ,12, 14, 16, 18, 20];
    ?>
    <ul>
    <?php
   for($i = 0 ; $i < count($odds); $i++){ ?>
        <li><?php echo $odds[$i]?></li>
        <li><?php echo $evens[$i]?></li>
 <?php   }
?>
    
    </ul>


</body>
</html>