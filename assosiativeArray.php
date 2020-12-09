<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fruits_colors = ['Apple' => "Red", 'Mango' => "Yellow", 'Orange' => "Orange"];
    
    ?>
    <ul>
    <?php
  foreach($fruits_colors as $fruit => $color){ ?>
        <li><?php echo $fruit. ' '. $color ?> hota hay.</li>
 <?php   }
?>
    
    </ul>


</body>
</html>