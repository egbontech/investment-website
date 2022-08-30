<?php
session_start();
if(isset($_POST['logout']))
{
    unset($_SESSION['admin']);
    

    $_SESSION['success'] = "Logged Out Succesfully";
    header("Location: ../signin");
    exit(0);
}