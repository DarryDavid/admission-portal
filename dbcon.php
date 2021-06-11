<?php

$con= mysqli_connect('localhost','root','','curd');

if($con){
	echo"connection success";
}
else{
	echo"connection failed";
}
?>
