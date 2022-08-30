<?php
session_start();
include('../../config/dbcon.php');



if(isset($_POST['register']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
            $check_name = "SELECT name FROM admins WHERE name='$name' ";
            $check_name_run = mysqli_query($con,$check_name);

            if(!mysqli_num_rows($check_name_run) > 0)
            {
                $password_length = strlen($password);
               if($password_length >= 4)
               {
                $query = "INSERT INTO admins(name,password) VALUES ('$name','$password')";
                $query_run = mysqli_query($con, $query);
                if($query_run)
                {                                      
                    $_SESSION['success'] = "Registered successfully";
                    header("Location: ../manage-admins");
                    exit(0);
                }
                else
                {                   
                    $_SESSION['error'] = "Oops something went wrong!";
                    header("Location: ../manage-admins");
                    exit(0);
                }
               }
               else
               {
                $_SESSION['error'] = "Password must be more than 3 characters!";
                header("Location: ../register");
                exit(0);
               }
            }
            else
            {
                $_SESSION['error'] = "This username is already registered!";
                header("Location: ../register");
                exit(0);
            }    
            
        
    
   
  
}
if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con, $_POST['update']);   
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $update = "UPDATE admins SET password='$password' WHERE id = '$id'";
    $update_query = mysqli_query($con, $update);

    if($update_query)
    {
        $_SESSION['success'] = "Updated successfully";
        header("Location: ../edit-admin?id=".$id);
        exit(0);
    }
}

if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete']); 
    $auth_id = mysqli_real_escape_string($con, $_POST['auth_id']); 

  

    if($id != $auth_id)
    {
        $delete = "DELETE FROM admins WHERE id='$id'";
        $delete_query = mysqli_query($con ,$delete);

        if($delete_query)
        {
            $_SESSION['success'] = "Deleted successfully";
            header("Location: ../manage-admins");
            exit(0);
        }
    }
    else
    {
        $_SESSION['error'] = "This user is correctly logged in!";
        header("Location: ../manage-admins");
        exit(0);       
    }
   
}