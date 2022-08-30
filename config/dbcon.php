<?php
//connection to mysql database

$host = "localhost";  //database host
$username = "root";  //database user
$password = "";    //database password
$database = "broker1";  //database name

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
    echo 'error in connection';
}




