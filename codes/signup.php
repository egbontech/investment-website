<?php
session_start();
include('../config/dbcon.php');



if(isset($_POST['register']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $referal = mysqli_real_escape_string($con, $_POST['ref']);    
    $token = md5(rand());

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size']; 
  
          //rename image
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $img_ext_to_lc = strtolower($image_ext);

        $allowed = array('jpg','png','jpeg');

        if(in_array($img_ext_to_lc, $allowed))
        {

            if($image_size < 2500000 )
            {
            $filename = time(). '.' .$image_ext;
            $checkemail = "SELECT email FROM users WHERE email='$email' ";
            $checkemail_run = mysqli_query($con,$checkemail);

            if(!mysqli_num_rows($checkemail_run) > 0)
            {
                $password_length = strlen($password);
               if($password_length >= 4)
               {
                $query = "INSERT INTO users(name,email,password,image,refered_by,verify_token,country) VALUES ('$name','$email','$password','$filename','$referal','$token','$country')";
                $query_run = mysqli_query($con, $query);
                if($query_run)
                {
                    move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/profile-picture/'.$filename);                   
                    $_SESSION['success'] = "Registered successfully";
                    header("Location: ../signin");
                    exit(0);
                }
                else
                {                   
                    $_SESSION['error'] = "Oops something went wrong!";
                    header("Location: ../signup");
                    exit(0);
                }
               }
               else
               {
                $_SESSION['error'] = "Password must be more than 3 characters!";
                header("Location: ../signup");
                exit(0);
               }
            }
            else
            {
                $_SESSION['error'] = "This email is already registered!";
                header("Location: ../signup");
                exit(0);
            }
        }
        else
        {
            $_SESSION['error'] = "image size should not exceed 2mb!";
            header("Location: ../signup");
            exit(0);           
        }        
        
    }
    else
    {
            $_SESSION['error'] = "You cannot upload file of this type!";
            header("Location: ../signup");
            exit(0);
    }
  
}