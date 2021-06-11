<?php 

include 'dbcon.php';

$e =$_POST['email'];
$p =$_POST['password'];
$cp=$_POST['cnfpassword'];
$n=$_POST['name'];

//echo $e,$p,$cp;

$sign="insert into job_signup(email,password,cnfpassword,name) values('$e','$p','$cp','$n')";
$instructor=mysqli_query($con,$sign);

if($instructor){
	header('location:job_login_form.php');
}
else{
	echo "try again";
}


?>