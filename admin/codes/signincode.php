<?php
session_start();
include('../../config/dbcon.php');



if(isset($_POST['login']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $user_query = "SELECT * FROM admins WHERE name = '$name' AND password = '$password' LIMIT 1";
    $user_query_run = mysqli_query($con, $user_query);

    if(mysqli_num_rows($user_query_run) > 0)
    {
        foreach($user_query_run as $data)
        {
            $user_name = $data['name'];      
            $id = $data['id'];      
        }

        $_SESSION['admin'] = true;        
        $_SESSION['name'] = $user_name;        
        $_SESSION['id'] = $id;        

     
        header("Location: ../dashboard");
        exit(0);
    }
    else
    {
        $_SESSION['error'] = "Invalid Credentials!";
        header("Location: ../signin");
        exit(0);
    }
}