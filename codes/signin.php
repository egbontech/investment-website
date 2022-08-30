<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $user_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    $user_query_run = mysqli_query($con, $user_query);

    if(mysqli_num_rows($user_query_run) > 0)
    {
        foreach($user_query_run as $data)
        {
            $user_id = $data['id'];
            $user_name = $data['name'];            
            $balance = $data['balance'];            
            $email = $data['email'];            
            $image = $data['image'];            
            $address = $data['address'];            
            $btc_wallet = $data['btc_wallet'];            
        };

        $_SESSION['auth'] = true;        
        $_SESSION['email'] = $email;     
       
        header("Location: ../users/index");
        exit(0);
    }
    else
    {
        $_SESSION['error'] = "Invalid Credentials!";
        header("Location: ../signin");
        exit(0);
    }
}