<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fruits = ['Apple', 'Mango', 'Orange'];
    $colors = ['Red', 'Yellow', 'Orange']
    ?>
    <ul>
    <?php
   foreach($fruits as $f => $fruit){ ?>
        <li><?php echo $fruit. ' '. $colors[$f] ?> hota hay.</li>
 <?php   }
?>
    
    </ul>


</body>
</html>
