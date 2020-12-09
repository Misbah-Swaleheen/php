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
    <h1 class="mx-4"></h1>
    
    <form method="post" action="">
        <div class="form-group p-4">
            <label for="num">Number:</label>
            <input type="number" name="num" id="num"b class="form-control">
        </div>
       
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="Form Go!">
    </form>
    <?php
        if(isset($_POST['num'])){
             $code = substr($_POST['num'], 0,4);
              if($code == "0330" || $code == "0331" || $code == "0332" || $code == "0333" || $code == "0334" || $code == "0335" || $code == "0336" || $code == "0337")
              { ?>
                    <div class="m-4">
        <img src="364563.png" alt="" style="width: 100px; height: 100px;"> <?php echo "   ". $_POST['num']?>
    </div>

            <?php  }
            else{ ?>
                <div class="m-4">
         <?php echo  $_POST['num']  ?> is not ufone number.
    </div>
        <?php    }
        }
    ?>

   
</body>
</html>