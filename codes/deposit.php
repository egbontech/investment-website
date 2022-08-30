<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['deposit']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $amount = mysqli_real_escape_string($con,$_POST['amount']);
    
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size']; 
    
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $img_ext_to_lc = strtolower($image_ext);

    $allowed = array('jpg','png','jpeg');

    if(in_array($img_ext_to_lc, $allowed))
    {
        if($image_size < 6000000)
        {
            $filename = time().'.'.$image_ext;

            $query = "INSERT INTO deposits(email,amount,image) VALUES ('$email','$amount','$filename')";
            $query_run = mysqli_query($con, $query);

            if($query_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/receipts/'.$filename);  
                $_SESSION['success'] = "Deposit request submitted successfully pending confirmation";
                header("Location: ../users/deposit");
                exit(0);
            }
        }
        else
        {
            $_SESSION['error'] = "image size should not exceed 5mb!";
            header("Location: ../users/deposit");
            exit(0);
        }
    }
    else
    {
        $_SESSION['error'] = "You cannot upload file of this type!";
        header("Location: ../users/deposit");
        exit(0);
    }
}

if(isset($_POST['delete']))
{
   $id = $_POST['delete'];

   $delete_image = "SELECT image FROM deposits WHERE id='$id'";
   $delete_image_query = mysqli_query($con, $delete_image); 
  
      $row = mysqli_fetch_array($delete_image_query);
      $image = $row['image'];
  

   $delete_query = "DELETE FROM deposits WHERE id = '$id' LIMIT 1";
   $delete_query_run = mysqli_query($con, $delete_query);
  

   if($delete_query_run)
    {  
       

        if(file_exists('../uploads/receipts/'.$image))
        {
            unlink("../uploads/receipts/".$image);
        }

        $_SESSION['success'] = "Deleted Successfully";
        header("Location: ../users/deposit");
        exit(0);
    }
    else
    {
        header("Location: ../users/deposit");
        exit(0);
    }
   
}