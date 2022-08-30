<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['add_package']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $duration = mysqli_real_escape_string($con,$_POST['duration']);
    $percent = mysqli_real_escape_string($con,$_POST['percent']);
    $min = mysqli_real_escape_string($con,$_POST['min_amount']);
    $max = mysqli_real_escape_string($con,$_POST['max_amount']);
    $status = $_POST['status'] == true ? '1' : '0';

    $query = "INSERT INTO packages(name,duration,percent,min_a,max_a,status) VALUES ('$name','$duration','$percent','$min','$max','$status')";
    $query_run = mysqli_query($con ,$query);

    if($query_run)
    {
        $_SESSION['success'] = "New package created successfully";
        header("Location: ../admin/manage-packages");
        exit(0);
    }
}

if(isset($_POST['edit_package']))
{
    $id = mysqli_real_escape_string($con,$_POST['edit_package']);
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $duration = mysqli_real_escape_string($con,$_POST['duration']);
    $percent = mysqli_real_escape_string($con,$_POST['percent']);
    $min = mysqli_real_escape_string($con,$_POST['min_amount']);
    $max = mysqli_real_escape_string($con,$_POST['max_amount']);
    $status = $_POST['status'] == true ? '1' : '0';

    $query_u = "UPDATE packages SET name='$name',duration='$duration',percent='$percent',min_a='$min',max_a='$max',status='$status' WHERE id='$id'";
    $query_u_run = mysqli_query($con,$query_u);

    if($query_u_run)
    {
        $_SESSION['success'] = "Package updated successfully";
        header("Location: ../admin/edit-package?id=".$id);
        exit(0);
    }
    else
    {
        header("Location: ../admin/edit-package?id=".$id);
        exit(0);
    }
}

if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($con,$_POST['delete']);

    $delete_query = "DELETE FROM packages WHERE id='$id' LIMIT 1";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        $_SESSION['success'] = "Package deleted successfully";
        header("Location: ../admin/manage-packages");
        exit(0);
    }
}