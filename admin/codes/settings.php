<?php
session_start();
include('../../config/dbcon.php');
if(isset($_POST['update_settings']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $wallet = mysqli_real_escape_string($con, $_POST['btc_w']);
    $c_rights = mysqli_real_escape_string($con, $_POST['c_rights']);
    $a_link = mysqli_real_escape_string($con, $_POST['a_link']);
    $reset = mysqli_real_escape_string($con, $_POST['reset']);

    $old_filename = $_POST['old_image'];

    $update_filename = "";

    $image = $_FILES['image']['name'];   

    if($image != NULL)
    {
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $new_filename = time(). '.' .$image_ext;
        
        $update_filename = $new_filename;

        $query = "UPDATE settings SET name='$name',email='$email',wallet='$wallet',logo='$update_filename',c_rights='$c_rights',a_link='$a_link',reset='$reset'";
        $query_run = mysqli_query($con ,$query);
    
        if($query_run)
        {
            if(file_exists('../../uploads/logo/'.$old_filename))
            {
                unlink("../../uploads/logo/".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../../uploads/logo/'.$update_filename);
            $_SESSION['success'] = "Updated successfully";
            header("Location: ../settings");
            exit(0);
        }
    }
    else
    {
        $update_filename = $old_filename;

        $query = "UPDATE settings SET name='$name',email='$email',wallet='$wallet',logo='$update_filename',c_rights='$c_rights',a_link='$a_link',reset='$reset'";
        $query_run = mysqli_query($con ,$query);
    
        if($query_run)
        {           
            $_SESSION['success'] = "Updated successfully";
            header("Location: ../settings");
            exit(0);
        }
    }

  
}