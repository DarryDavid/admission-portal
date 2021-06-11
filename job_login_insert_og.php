<?php 

session_start();
include 'dbcon.php';


$e=$_POST['email'];
$p=$_POST['password'];
//echo $e,$p;

$checker="select * from job_signup where email='$e' and password='$p'";
$instructor=mysqli_query($con,$checker);
//print_r($instructor);

$count=mysqli_num_rows($instructor);



if ($count==1) {

	$_SESSION['email']=$e;
	header('location:job_dashboard.php');
}
else{
	header('location:job_login_form.php');
}

?>