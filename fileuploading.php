<?php 
    if (isset($_POST['btn1'])) {
        # code...
        // $file = $_FILES['file'];
        // $temp_loc = $file['tmp_name'];
        // move_uploaded_file($temp_loc, 'uploading/'.$file['name'] );
        // echo $temp_loc;


        move_uploaded_file($_FILES['file']['tmp_name'], 'uploading/'.$_FILES['file']['name'] );
        echo 'file uploaded sucessfully <br>';
       
    
    }
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
          
               
          <h1 class="mx-4">File Uploading</h1>

<form method="post" action="" enctype="multipart/form-data">
  <div class="form-group p-4">
      <label for="file">File</label>
      <input type="file" name="file" id="file" class="form-control">
  </div>
  <input type="submit" name="btn1" id="" class="btn btn-info p-2 mx-4" value="Upload!">
</form>
   

<?php 
    if (isset($_FILES['file']['name'] ) && $_FILES['file']['name'] != '' ) {
        # code...?>

        <img src="uploading/<?php echo $_FILES['file']['name'] ?>" alt="" style="height: 200px; width: 200px">
        <?php 
    }
?>

</div>
</body>
</html>