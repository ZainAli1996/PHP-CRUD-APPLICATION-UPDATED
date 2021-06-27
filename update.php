<?php

$con = mysqli_connect("localhost", "root", "", "practice");

if(isset($_GET['id'])){
    $id = $_GET['id'];

$SelectQuery = "SELECT * FROM zain_table WHERE id = '$id'";
$query = mysqli_query($con, $SelectQuery);
while($row = mysqli_fetch_array($query)){

    $id = $row['id'];
    $First_Name = $row['First_Name'];
    $Last_Name = $row['Last_Name'];
    $City = $row['City'];

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
    <link rel="stylesheet" href="css/update.css">
    <title>UPDATE DATA</title>
</head>
<body>
<div class="container">
    <h1 class="text-center mt-4">UPDATE CURRUNT DATA</h1>
    <form action="updated.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
    <div class="col-md-12">
    <label for="first_name"><b>FIRST NAME :</b></label>
    <input type="text" class="form-control" name="first_name" value="<?php echo $First_Name;?>" required>
    </div>
    <div class="col-md-12">
    <label for="last_name"><b>LAST NAME :</b></label>
    <input type="text" class="form-control" name="last_name" value="<?php echo $Last_Name;?>" required>
    </div>
    <div class="col-md-12">
    <label for="city"><b>CITY :</b></label>
    <input type="text" class="form-control" name="city" value="<?php echo $City;?>" required>
    </div>
    <div class="col-md-6">
    <input type="submit" class="btn btn-outline-primary" name="update" value="UPDATE DATA">
    </div>
    </form>
    <?php } ?>
    </div>
</body>
</html>