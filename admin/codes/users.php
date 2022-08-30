<?php
session_start();
include('../../config/dbcon.php');



if(isset($_POST['update_user']))
{   
    $id = mysqli_real_escape_string($con, $_POST['update_user']);    
    $email = mysqli_real_escape_string($con, $_POST['email']);    
    $bonus = mysqli_real_escape_string($con, $_POST['referal_bonus']);    
    $balance = mysqli_real_escape_string($con, $_POST['balance']);    

    $query = "UPDATE users SET balance='$balance',referal_bonus='$bonus',email='$email' WHERE id='$id' LIMIT 1";
    $query_run = mysqli_query($con ,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Updated successfully";
        header("Location: ../edit-user?id=".$id);
        exit(0);
    }
}

if(isset($_POST['delete_user']))
{   
    $id = mysqli_real_escape_string($con, $_POST['delete_user']); 
    $profile_pic = mysqli_real_escape_string($con, $_POST['profile_pic']); 

    $delete = "DELETE FROM users WHERE id='$id'";
    $delete_query = mysqli_query($con, $delete);

    if($delete_query)
    {
        if(file_exists('../../uploads/profile-picture/'.$profile_pic))
        {
            unlink("../../uploads/profile-picture/".$profile_pic);
        }
        $_SESSION['success'] = "Deleted successfully";
        header("Location: ../manage-users");
        exit(0);
    }
}
