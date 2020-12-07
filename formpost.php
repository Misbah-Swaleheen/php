<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    // echo "Welcome $name ";
    // echo "<br> Your email address is $email"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $name?></h1>
    <p>Your email address is  <?php echo $email?></p>
</body>
</html>