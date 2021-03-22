<?php 
    // $var = ['1996-08-15'];
    // $convert = strtotime($var);
    // $new_format = date('Y-m-d', $convert);
    // echo $new_format;
?>

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
        <div class="row">

        <form method="post" action="">
        <div class="form-group p-4">
            <label for="data"></label>
            <textarea name="data" id="data" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="submit">

        </form>

        <div class="col pt-4">
                <textarea name="output" id="" cols="30" rows="10"><?php 
                if (isset($_POST['data']) && $_POST['data'] != '') {
                    # code...
                    $arr = explode(',',$_POST['data'] );
                        foreach($arr as $item){
                            // $convert = strtotime($var);
                            // $new_format = date('Y-m-d', $convert);
                            // $new_format = DateTime::createFromFormat('Y-m-d', $item)->format('Y-m-d');
                            // echo $new_format;
                             
                            echo  str_replace("'", '',$item) ."\n";
                        }

                       
            } ?>
                </textarea>
            </div>
        </div>
    </div>
</body>
</html>