<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['withdraw']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $amount = mysqli_real_escape_string($con,$_POST['amount']);
    $balance = mysqli_real_escape_string($con,$_POST['balance']);
    
    if($amount >= 100)
    {
        if($balance >= $amount)
        {
           $query = "INSERT INTO withdrawals(email,amount) VALUES ('$email','$amount')";
           $query_run = mysqli_query($con, $query);
    
           if($query)
           {
            $new_balance = $balance - $amount;
    
            $update_user_balance = "UPDATE users SET balance='$new_balance' WHERE email='$email' LIMIT 1";
            $update_user_balance_query = mysqli_query($con, $update_user_balance);
    
            if($update_user_balance_query)
            {
                $_SESSION['success'] = "Withdrawal request of $".$amount." submitted successfully pending confirmation";
                header("Location: ../users/withdrawals");
                exit(0);
            }        
          
           }
        }
        else
        {
            $_SESSION['warning'] = "Request failed due to insufficient balance!";
            header("Location: ../users/withdrawals");
            exit(0);
        }
    }
    else
    {
        $_SESSION['warning'] = "Minimum withdrawal is set at $100";
        header("Location: ../users/withdrawals");
        exit(0);
    }

}
if(isset($_POST['delete']))
{
   $id = $_POST['delete'];  

   $delete_query = "DELETE FROM withdrawals WHERE id = '$id' LIMIT 1";
   $delete_query_run = mysqli_query($con, $delete_query);
  

   if($delete_query_run)
    {  
        $_SESSION['success'] = "Deleted Successfully";
        header("Location: ../users/withdrawals");
        exit(0);
    }
    else
    {
        header("Location: ../users/withdrawals");
        exit(0);
    }
  
}

