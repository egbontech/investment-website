<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['update-profile']))
{
   
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $country = mysqli_real_escape_string($con, $_POST['country']);   
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $btc_wallet = mysqli_real_escape_string($con, $_POST['btc_wallet']);

    $old_filename = $_POST['old_image'];

    $update_filename = "";

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size']; 

    if($image != NULL)
    {   
            
                 
            $image_ext = pathinfo($image, PATHINFO_EXTENSION);
            $img_ext_to_lc = strtolower($image_ext);

            $allowed = array('jpg','png','jpeg');

            if(in_array($img_ext_to_lc, $allowed))
            {
                
                if($image_size < 2500000) 
                {  
                $filename = time(). '.' .$image_ext;
                //new image name    
                $update_filename = $filename;   

                $query = "UPDATE users SET name='$name',country='$country',address='$address',email='$email',btc_wallet='$btc_wallet',image='$update_filename' WHERE email='$email' LIMIT 1";
                $query_run = mysqli_query($con, $query);

                if($query_run)
                {                   
                    
                    if(file_exists('../uploads/profile-picture/'.$old_filename))
                    {
                        unlink("../uploads/profile-picture/".$old_filename);
                    }
                                     
                    move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/profile-picture/'.$update_filename);   
                    $_SESSION['success'] = "Profile updated successfully!";
                    header("Location: ../users/users-profile");
                    exit(0);
                }
            }
            else
            {               
                $_SESSION['error'] = "image size should not exceed 2mb!";
                header("Location: ../users/users-profile");
                exit(0);
            }

            
        }   
        else
        {
            $_SESSION['error'] = "You cannot upload file of this type!";
            header("Location: ../users/users-profile");
            exit(0);
        }
        
    }
    else
    {  
        //old image name
        $update_filename = $old_filename;
        $query = "UPDATE users SET name='$name',country='$country',address='$address',email='$email',btc_wallet='$btc_wallet',image='$update_filename' WHERE email='$email' LIMIT 1";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['success'] = "Profile updated successfully!";
            header("Location: ../users/users-profile");
            exit(0);
        }

    }
}