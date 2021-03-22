<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>

<script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</head>
<body>
<div class="container ">
<h1 class="mx-4">Naya Pakistan Housing Scheme</h1>
    
    <form method="post" action="" class="w-50">
        <div class="form-group py-2 px-5">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            <p class="info" style="display:none"  ></p>
        </div>
        
        <div class="form-group py-2 px-5">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control"  placeholder="Enter your age">
            <p class="info" style="display:none"  ></p>
        </div>

        <div class="form-group py-2 px-5">
            <label for="salary">Salary:</label>
            <input type="number" name="salary" id="salary" class="form-control"  placeholder="Enter your salary">
            <p class="info" style="display:none"  ></p>
        </div>

        <div class="form-group py-2 px-5">
            <label for="payment">House payment</label>
            <input type="number" name="payment" id="payment" class="form-control"  placeholder="above 30 Lac">
            <p class="info" style="display:none"  ></p>
        </div>

        <div class="form-group py-2 px-5">
            <label for="advance">Advance payment:</label>
            <input type="number" name="advance" id="advance" class="form-control"  placeholder="Enter advance payment">
            <p class="info" style="display:none"  ></p>
        </div>

        <div class="form-group py-2 px-5">
            <label for="loan_year">No. of years that you want pay loan amount</label>
            <input type="number" name="loan_year" id="loan_year" class="form-control"  placeholder="Enter no. of years that you want pay loan amount">
            <p class="info" style="display:none"  ></p>

        </div>
       
        <input type="submit" name="" id="submit" class="btn btn-info py-2 px-3 mx-5" value="Submit">
    </form>

    
<?php
  if(isset($_POST['payment']) && $_POST['payment'] !='' && isset($_POST['loan_year']) && isset($_POST['age']) && isset($_POST['name']) && isset($_POST['salary']) && isset($_POST['advance'])  && $_POST['advance'] !=''){
        $current = $_POST['payment'] - $_POST['advance'];
       
        $amount = 0;
        switch ($_POST['loan_year']) {
            case 5:
                # code... 
                $percent =  ($current * 2.5) / 100;
                $ins_year = 5 * 12;
                $amount =  ($current + $percent) / $ins_year;
                break;
            case 10:
                    # code...
                    $percent =  ($current * 5) / 100;
                    $ins_year = 10 * 12;
                    $amount =  ($current + $percent) / $ins_year;
                    break;
            
            case 15:
                # code...
                $percent =  ($current * 7.5) / 100;
                $ins_year = 15 * 12;
                $amount =  ($current + $percent) / $ins_year;
                break;

            default:
                # code...
                $percent =  ($current * 10) / 100;
                $ins_year = 20 * 12;
                $amount =  ($current + $percent) / $ins_year;
                break;
        }
      
     if ($amount > (  $_POST['salary'] / 1.7) ) { ?>
      
      <p class="px-5 pt-5"> Dear <?php  echo $_POST['name'] ?></p>
        <p class="px-5">
            your monthly payable amount <?php echo ceil($amount ) ?>  rupees is more than half of  <?php  echo $_POST['salary'] ?> rupees </p>


<?php 
     }
     elseif ($amount >  $_POST['salary'] ) { 
        
        ?>   <p class="px-5 pt-5"> Dear <?php  echo $_POST['name'] ?></p>
        <p class="px-5">
            your monthly payable amount <?php echo ceil($amount ) ?> rupees is more than  <?php  echo $_POST['salary'] ?> rupees </p>
<?php
  }
  else {
      ?>
     <p class="px-5 pt-5"> Dear <?php  echo $_POST['name'] ?></p>
        <p class="px-5">
            You will pay  <?php echo ceil($amount ) ?> Rupees everymonth for <?php  echo $_POST['loan_year'] ?> years </p>
<?php 
    }

               }
     
?>

</div>
<script>
    $(document).ready(function () {
        var haserror = false;

        function emptyfield(id) {
        if ($(id).val() == '') {
            $(id).css({'border':'1px solid red' });
            $(id).next('.info').show().text('This field is required').css({
                'color':'red'
        })
           haserror = true;
        }
        else{
            haserror = false; 
        }
       
        }

        $('input').focus(function () {
            $(this).next('.info').hide();
              
                $(this).css({'border': 'none'});
            })

            $('#name').keyup(function () {
        var name = $('#name').val();
       
        if ( $(this).val().match(/^[a-zA-Z\s]+$/) ) {
            $(this).css({'border':'1px solid green' });
               $(this).next('.info').hide()
    } else {
        $(this).css({'border':'1px solid red' });
        $(this).next('.info').show().text('Please enter valid name ').css({'color':'red'})
    }
    })

        $('#age').keyup(function() {
            if ($(this).val() <  25 ) {
                haserror = true;
                $(this).css({'border': '1px solid red'})
                $(this).next('.info').show().html('you are not eligible').css({'color': 'red'})

            }
            else{
                haserror = false;
                $(this).css({'border': '1px solid green'})
                $(this).next('.info').hide()
            }
        })

        $('#salary').keyup(function() {
            if ($(this).val() <  25000 ) {
                console.log($(this).val())
                haserror = true;
                $(this).css({'border': '1px solid red'})
                $(this).next('.info').show().html('you are not eligible').css({'color': 'red'})

            }
            else{
                haserror = false;
                $(this).css({'border': '1px solid green'})
                $(this).next('.info').hide()
            }
        })

        $('#loan_year').keyup(function() {
            if ($(this).val() <  5 || $(this).val() >  20  ) {
                haserror = true;
                $(this).css({'border': '1px solid red'})
                $(this).next('.info').show().html('range is between 5 to 20').css({'color': 'red'})

            }
            else{
                haserror = false;
                $(this).css({'border': '1px solid green'})
                $(this).next('.info').hide()
            }
        })

        $('#submit').click(function () {
            emptyfield('#name')
            emptyfield('#age')
            emptyfield('#salary')
            emptyfield('#payment')
            emptyfield('#advance')
            emptyfield('#loan_year')
            if (haserror) {
                return false
            }
        })
    })
</script>
   
</body>
</html>