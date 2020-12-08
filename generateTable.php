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
    <h1 class="mx-4">Generating Counting Table</h1>
    
    <form method="post" action="">
        <div class="form-group p-4">
            <label for="number">Number:</label>
            <input type="text" name="number" id="number" class="form-control">
        </div>
        <div class="form-group p-4">
            <label for="times">Times:</label>
            <input type="number" name="times" id="times"b class="form-control">
        </div>
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="Form Go!">
    </form>
    <div class="container">
    <table class="table text-center my-5 ">
        <tbody >

       
        
    <?php
    if(isset($_POST['number']) && (isset($_POST['times']))){
    for($i = 1; $i <= $_POST['times']; $i++){
       
            
       
        ?>

<tr >
        <td scope="row"  class="border border-secondary"><?php echo $_POST['number'] ?></td>
        <td class="border border-secondary">x</td>
        <td class="border border-secondary"><?php echo $i?></td>
        <td class="border border-secondary">=</td>
        <td class="border border-secondary"><?php echo $_POST['number']*$i?></td>
     </tr>
        
     <?php
  
}

  }
?>
</tbody>
    </table>
   
</body>
</html>