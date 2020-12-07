<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p = $_POST['perc'];

        if($p >= 80){
            $grade = 'A+';
        }
        elseif($p >= 70){
            $grade = 'A';
        }
        elseif($p >= 60){
            $grade = 'B';
        }
        elseif($p >= 50){
            $grade = 'C';
        }
        else{
            $grade = 'F';
        }
    ?>
   <h1> Your grade is <?php echo $grade ?> </h1>
</body>
</html>