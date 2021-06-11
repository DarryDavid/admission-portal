<?php 




include 'dbcon.php';

$stu_id=$_POST['student_id'];



$n=$_POST['name'];
$e=$_POST['email'];
$ph=$_POST['phone'];
$dt =$_POST['dob'];
$g =$_POST['gender'];
$add=$_POST['address'];
$ten=$_POST['tenth'];
$twe =$_POST['twelth'];

//echo $n,$e,$dt,$ph,$g,$add,$ten,$twe;


$insert="insert into job(name,email,dob,phone,gender,address,tenth,twelth,student_id)values('$n','$e','$dt','$ph','$g','$add','$ten','$twe','$stu_id')";

$instructor=mysqli_query($con,$insert);


if($instructor){
	header('location:job_user_display.php');
}
else{
	echo "<br>";
	echo "unsuccessful attempt";
}


?>