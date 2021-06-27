<?php

$con = mysqli_connect("localhost", "root", "", "practice");

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $First_Name = $_POST['first_name'];
    $Last_Name = $_POST['last_name'];
    $City = $_POST['city'];

    $UpdateQuery = "UPDATE zain_table SET First_Name='$First_Name', Last_Name='$Last_Name', City='$City' WHERE id ='$id'";
    $query = mysqli_query($con, $UpdateQuery);

    if($query){

        ?>
        <script>
            alert("Your Data Has Been Updated Successfuly!");
            location.replace('select.php');
        </script>
        <?php
        
    }else{
        ?>
        <script>
            alert("Failed to Update Your Data, Try Again");
        </script>
        <?php
    }

}
?>