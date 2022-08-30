<?php
ob_start();
session_start();
include('../config/dbcon.php');

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




function send_password_reset_mail($user_email,$name,$token,$reset)
{
    //require autoload file
    require_once 'vendor/autoload.php';

    $mail = new PHPMailer(true);
    
    $mail->SMTPDebug = 3;
     
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Host       = "mail.egbontech.com";                     //Set the SMTP server to send through  
    $mail->Username   = "info@egbontech.com";                     //SMTP username
    $mail->Password   = "casemiro50"; 
    $mail->mailer = "smtp";                              //SMTP password
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@egbontech.com');
    $mail->addAddress($user_email);     //Add a recipient   

  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset Password Notification';

    $template = "
    <h2>Hello $name</h2>
    <h3>You are receiving this email because we received a password-reset request from your account.</h3>
    <br/><br/>
    <a href='$reset?token=$token&email=$user_email'>Reset-Password</a>
    <br/><br/>
    <p>Kindly ignore this message if you did not make this request.</p>   
    <br/><br/>
    <p>Thank you for choosing coinpay.</p>
    ";

    $mail->Body    = $template;
    $mail->send();
}

if(isset($_POST['reset']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email,name,verify_token FROM users WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con,$check_email);

    if(mysqli_num_rows($check_email_run) > 0)
    {
         $row = mysqli_fetch_array($check_email_run);

         $name = $row['name'];
         $user_email = $row['email'];

         $update_token = "UPDATE users SET verify_token = '$token' WHERE email='$user_email'";
         $update_token_run = mysqli_query($con, $update_token);

         if($update_token_run)
        {
            $rights = "SELECT reset FROM settings";
            $rights_query = mysqli_query($con, $rights);

            $row = mysqli_fetch_array($rights_query);
            $reset = $row['reset'];
             send_password_reset_mail($user_email,$name,$token,$reset);
             $_SESSION['success'] = "We e-mailed you a password reset link,kindly check your spam if you can't find mail";
             header("Location:../forgot-pass");
             exit(0);
         }
         else
         {
            $_SESSION['error'] = "Could not update token! #1";
            header("Location:../forgot-pass");
            exit(0);
         }
        
    }
    else
    {
        $_SESSION['error'] = "This email is not registered!";
        header("Location:../forgot-pass");
        exit(0);
    }
}

if(isset($_POST['update_password']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $token = mysqli_real_escape_string($con,$_POST['password_token']);

    if (!empty($token)) 
    {
        if (!empty(trim($email)) && !empty(trim($password)))
        {
            $check_token = "SELECT verify_token FROM users WHERE verify_token= '$token' LIMIT 1";
            $check_token_run = mysqli_query($con,$check_token);

            if (mysqli_num_rows($check_token_run) > 0) 
            {
                                 
                    $update_password = "UPDATE users SET password = '$password' WHERE verify_token='$token' LIMIT 1";
                    $update_password_run = mysqli_query($con,$update_password);

                      if ($update_password_run)
                      {
                        $new_token = md5(rand());  
                        $update_new_token = "UPDATE users SET verify_token = '$new_token' WHERE verify_token='$token' LIMIT 1";
                        $update_new_token_run = mysqli_query($con, $update_new_token); 
                        $_SESSION['success'] = "Password Updated Succesfully";
                        header("Location:../signin");
                        exit(0);
                      }
                       else
                      {
                        $_SESSION['error'] = "Oops could not update password something went wrong!";
                        header("Location:../reset-pass?token=$token&email=$email");
                        exit(0);
                      }                     
                
                 
            } 
            else 
            {
                $_SESSION['error'] = "Invalid token!";
                header("Location:../reset-pass?token=$token&email=$email");
                exit(0);
            }
            
        } 
        else         
        {
            $_SESSION['error'] = "All fields are required!";
            header("Location:../reset-pass?token=$token&email=$email");
            exit(0);
        }
        
    } 
    else 
    {
        $_SESSION['error'] = "No token available!";
        header("Location:reset-pass");
        exit(0);
    }
    
}