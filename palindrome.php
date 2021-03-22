

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
          
               
                <h1 class="mx-4">Word Palindrome</h1>
    
    <form method="post" action="">
        <div class="form-group p-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name"b class="form-control">
        </div>
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="Form Go!">
    </form>
         
            <div class=" my-4">    
                 <?php 
                    if (isset($_POST['name']) && $_POST['name'] != '') {
                        # code...
                        $rev_name = strrev($_POST['name']);
    $found = strcasecmp($_POST['name'], $rev_name);
    if ($found == 0) { 
        # code... ?>

        <h4>Your word is palindrome</h4>
      <?php  
    }
    else{ ?>
         <h4>Your word is not palindrome</h4>
        <?php 
    }
                    }
                 ?>
                
            </div>
        
        </div>

</body>
</html>