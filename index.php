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
    <link rel="stylesheet" href="css/style.css">
    <title>USER LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>USER LOGIN</h2>
        </div>
        <form action="select.php" method="POST">
            <div class="details">
                <div class="col-md-12">
                <label for="email"><b>EMAIL :</b></label>
                <input type="text" class="form-control" name="email" maxlength="30" required>
                </div>
                <br>
                <div class="col-md-12">
                <label for="password"><b>PASSWORD :</b></label>
                <input type="password" class="form-control" name="name" maxlength="20" required>
                </div>
                <br>
                <div class="col-md-6">
                <input type="submit" class="btn btn-outline-dark" name="submit" value="LOGGED ME IN">
                </div>
            </div>
        </form>
        <p>New User? <a href="">Register Here</a></p>
    </div>
</body>
</html>