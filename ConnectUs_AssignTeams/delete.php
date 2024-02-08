<?php 
include "config.php";
?>

 <?php

if(isset($_POST['delete']))
{
    $id = $_POST['Pro_id'];
    $delete_row = "DELETE FROM `P_team_members` WHERE  Pro_id = '$id'";
$query_run = mysqli_query($conn,$delete_row);

if($query_run)
{
    echo '<script>alert("Data Deleted");</script>';
    header("location:PM.php");
}else
{
    echo '<script>alert("Data not deleted");</script>';
        header("location:PM.php");
}


}

?> 