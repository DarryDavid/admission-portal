<?php 

include'dbcon.php';

$id=$_POST['id'];


$n=$_POST['name'];
$e=$_POST['email'];
$ph=$_POST['phone'];
$dt =$_POST['dob'];
$g =$_POST['gender'];
$add=$_POST['address'];
$ten=$_POST['tenth'];
$twe =$_POST['twelth'];

//echo $n,$e,$dt,$ph,$g,$add,$ten,$twe;

$update="update job set name='$n',email='$e',phone='$ph',dob='$dt',gender='$g',address='$add',tenth='$ten',twelth='$twe' where id='$id'" ;

$instructor=mysqli_query($con,$update);

header('location:job_user_display.php');

?>