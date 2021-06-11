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

$query=mysqli_fetch_array($instructor);
// echo "<pre>";
// print_r($query);
//echo $query['name'];
//$_SESSION['sid']=$query['id'];
//echo $query['id'];

if ($count==1) {

	$_SESSION['email']=$e;
	$_SESSION['n']=$query['name'];        //n is simply session variable

	$_SESSION['sid']=$query['id'];        //this id is the auto-generated id from signup page 

	$_SESSION['success']="login successfully!!";
	header('location:job_dashboard.php');
}
else{
	$_SESSION['error']="either email or password wrong <!>";
	header('location:job_login_form.php');
}

?>