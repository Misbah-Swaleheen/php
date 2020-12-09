<?php
    $colors = ['Black', 'White', 'Silver', 'Yellow'];
    $colors2 = ['Blue', 'Orange', "Yellow"];

    $merged = array_merge($colors, $colors2);
   // echo var_dump($merged)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
  foreach($merged as $item){ ?>
        <li><?php echo $item ?></li>
 <?php   }
?>
    
    </ul>
</body>
</html>