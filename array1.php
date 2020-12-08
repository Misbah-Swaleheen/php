<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fruits = ['Apple', 'Mango', 'Orange', 'Banana'];
    ?>
    <ul>
    <?php
   foreach($fruits as $item){ ?>
        <li><?php echo $item ?></li>
 <?php   }
?>
    
    </ul>


</body>
</html>
