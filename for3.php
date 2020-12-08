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
        for ($i = 2; $i < 7; $i++) {
    ?>
        <li><?php echo $i * $i ?></li>

    <?php
        }
    ?>
    </ul>
</body>

</html>