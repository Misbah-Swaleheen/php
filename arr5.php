<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fruits_colors = ['Apple' => ["Red", '120 kg'], 'Mango' =>[ "Yellow",'200 kg'], 'Orange' => ["Orange", '200 dozen']];
    
    ?>
    <ul>
    <?php
  foreach($fruits_colors as $fruit => $value){ ?>
        <li><?php echo $fruit. ' '. $value[0] ?> hota hay. or <?php echo $value[1]?> us ka rate h.</li>
 <?php   }
?>
    
    </ul>


</body>
</html>