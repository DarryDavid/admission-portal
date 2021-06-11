<?php  

include'dbcon.php';

$id=$_GET['id'];



$delete="delete from job where id=$id";
$instructor=mysqli_query($con,$delete);

header('location:job_admin_display.php');




?>