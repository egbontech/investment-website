<?php
session_start();
include('../../config/dbcon.php');



if(isset($_POST['update_deposit']))
{   
    $id = mysqli_real_escape_string($con, $_POST['update_deposit']);    
    $status = mysqli_real_escape_string($con, $_POST['status']);  

    $query = "UPDATE deposits SET status = '$status' WHERE id='$id' LIMIT 1";
    $query_run = mysqli_query($con ,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Updated successfully";
        header("Location: ../manage-deposits");
        exit(0);
    }
}