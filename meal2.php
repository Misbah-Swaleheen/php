<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
    <!-- <h1 class="mx-4">Select a Day</h1> -->
    
    <form method="post" action="">
        <div class="form-group p-4">
            <label for="day">Please select a day:</label>
            <select name="day" id="">
                <option >Monday</option>
                <option >Tuesday</option>
                <option >Wednesday</option>
                <option >Thursday</option>
                <option >Friday</option>
                <option >Saturday</option>
                <option >Sunday</option>
            </select>
        </div>
        <!-- <div class="form-group p-4">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"b class="form-control">
        </div> -->
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="Go!">
    </form>

    <div class="my-4 mx-4">
    <?php
        if(isset($_POST['day'])){
        $d = $_POST['day'];
            switch($d){
                case "Monday":
                    $meal = 'Daal-Chawal';
                    break;
                case "Tuesday":
                    $meal = 'Zinger Burger';
                    break;
                case "Wednesday":
                    $meal = 'Aloo Ghost';
                    break;
                case "Thursday":
                    $meal = 'Paratha Roll';
                    break;
                case "Friday":
                    $meal = 'Nihari';
                    break;
                case "Saturday":
                    $meal = 'Pasta';
                    break;
                default:
                    $meal = 'Biryani';
                    break;

            }
        
        echo "<h1> Today's meal is  $meal </h1>";
    }
    ?>
   
    </div>
    </div>

   
</body>
</html>