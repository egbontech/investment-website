<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['start_package']))
{    
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $amount = mysqli_real_escape_string($con,$_POST['amount']);
    $duration = mysqli_real_escape_string($con,$_POST['duration']);
    $min = mysqli_real_escape_string($con,$_POST['min_a']);
    $percent = mysqli_real_escape_string($con,$_POST['percent']);
    


   
       if($amount >= $min)
       {      
    
            $check = "SELECT balance From users WHERE email='$email'";
            $check_run = mysqli_query($con, $check);
        
            $row = mysqli_fetch_array($check_run);
            $balance = $row['balance']; 
            
            if($balance >= $amount)
            {
                $query = "INSERT INTO investments(p_name,email,amount,duration) VALUES ('$name','$email','$amount','$duration')";
                $query_run = mysqli_query($con ,$query) ;  
                
                if($query_run)
                {
                    $new_balance = $balance - $amount;

                    $update_user_balance = "UPDATE users SET balance='$new_balance' WHERE email='$email' LIMIT 1";
                    $update_user_balance_query = mysqli_query($con, $update_user_balance);
                    if($update_user_balance_query)
                    {
                        $_SESSION['success'] = "Your investment of $".$amount." was activated succesfully,and will be completed ".$duration;
                        header("Location: ../users/my-investments");
                        exit(0);
                    }
                    else
                    {
                        header("Location: ../users/invest?I=".$id);
                        exit(0);
                    }
                  
                }
                else
                {
                    header("Location: ../users/invest?I=".$id);
                    exit(0);
                }
            }
            else
            {
                $_SESSION['warning'] = "Request failed due to insufficient balance!";
                header("Location: ../users/invest?I=".$id);
                exit(0);
            }
       }
       else
       {
            $_SESSION['warning'] = "Minimum of $".$min." is required to activate this plan!";
            header("Location: ../users/invest?I=".$id);
            exit(0);
       }
}

if(isset($_POST['delete']))
{
   $id = $_POST['delete'];  

   $delete_query = "DELETE FROM investments WHERE id = '$id' LIMIT 1";
   $delete_query_run = mysqli_query($con, $delete_query);
  

   if($delete_query_run)
    {  
        $_SESSION['success'] = "Deleted Successfully";
        header("Location: ../users/my-investments");
        exit(0);
    }
    else
    {
        header("Location: ../users/my-investments");
        exit(0);
    }
  
}