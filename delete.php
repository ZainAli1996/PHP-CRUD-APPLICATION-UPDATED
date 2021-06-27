<?php

$con = mysqli_connect("localhost", "root", "", "practice");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $DeleteQuery = "DELETE FROM zain_table WHERE id ='$id'";
    $query = mysqli_query($con, $DeleteQuery);

    if($query){

        ?>
        <script>
            alert("Your Data Has Been Deleted Successfuly!");
            location.replace('select.php');
        </script>
        <?php
        
    }else{
        ?>
        <script>
            alert("Failed to Delete Your Data, Try Again");
        </script>
        <?php
    }

}

?>