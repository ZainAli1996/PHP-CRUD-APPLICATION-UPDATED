<?php
$con = mysqli_connect("localhost", "root", "", "practice");

if(isset($_POST['submit'])){

    $First_Name = mysqli_real_escape_string($con, $_POST['first_name']);
    $LAST_Name = mysqli_real_escape_string($con, $_POST['last_name']);
    $City = mysqli_real_escape_string($con, $_POST['city']);

    $InsertQuery = "INSERT into zain_table (First_Name, Last_Name, City) values ('$First_Name', '$LAST_Name', '$City')";
    $query = mysqli_query($con, $InsertQuery);

    if($query){

        ?>
        <script>
            alert("Your Data Has Inserted Successfuly!");
            location.replace('select.php');
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Failed to Insert Your Data, Try Again");
        </script>
        <?php
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="icon" href="icon/php.png" sizes="50x50">
    <link rel="stylesheet" href="css/insert.css">
    <title>INSERT DATA</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-3">INSERT NEW DATA</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-12">
    <label for="first_name"><b>FIRST NAME :</b></label>
    <input type="text" class="form-control" name="first_name" maxlength="10" required>
    </div>
    <div class="col-md-12">
    <label for="last_name"><b>LAST NAME :</b></label>
    <input type="text" class="form-control" name="last_name" maxlength="10" required>
    </div>
    <div class="col-md-12">
    <label for="city"><b>CITY :</b></label>
    <input type="text" class="form-control" name="city" maxlength="10" required>
    </div>
    <div class="col-md-6">
    <input type="submit" class="btn btn-outline-primary" name="submit" value="INSERT DATA">
    </div>
    </form>
    </div>
</body>
</html>