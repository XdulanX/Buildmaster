<?php 
include "../config.php";
?>

 <?php

if(isset($_POST['delete']))
{
    $id = $_POST['eno'];
    $delete_row = "DELETE FROM `emp_pool` WHERE  eno = '$id'";
$query_run = mysqli_query($conn,$delete_row);

if($query_run)
{
    echo '<script>alert("Data Deleted");</script>';
    header("location:gen_id.php");
}else
{
    echo '<script>alert("Data not deleted");</script>';
        header("location:Admin_panel.php");
}


}

?> 