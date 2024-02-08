<?php 
include "../config.php";
?>

 <?php

if(isset($_POST['delete']))
{
    $id = $_POST['emp_id'];
    $delete_row = "DELETE FROM `accounts` WHERE  emp_id = '$id'";
$query_run = mysqli_query($conn,$delete_row);

if($query_run)
{
    echo '<script>alert("Data Deleted");</script>';
    header("location:Admin_panel.php");
}else
{
    echo '<script>alert("Data not deleted");</script>';
        header("location:Admin_panel.php");
}


}

?>  