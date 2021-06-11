<?php  

session_start();

if(empty($_SESSION['email'])){
	header('location:job.php'); //only seeing ki session ke ander data aa raha hai yaa fir nahi,,,,,agar nahi aa raha hoga to login ke page pe pahucha dega

}





?>