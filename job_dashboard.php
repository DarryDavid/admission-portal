<?php 

//session_start();
include 'job_session.php';

//echo $_SESSION['email'];

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!----for mobile responsive--->

	<style>
		.cust2{
			margin-top: 120px;
			width: 200px;
    		height: 100px;
    		border-radius: 68px;
   		 	font-size: 35px;
		}

		.cust1{
			margin-right: 100px;
		}
		.background_image{
			background: url(4.jpg) ;
			background-repeat:no-repeat ;
			background-size: cover;
			background-attachment: fixed;
		}

		.layer{
			
			margin-top: 100px;
			background-image: linear-gradient(to right, #aa4b6b,#6b6b83,#3b8d99);
		}

	</style>
</head>
<body class="background_image">
<div class="container layer">


	<?php 
	 if (isset($_SESSION['success'])) {
	 	?>
	 	<h1 class="alert alert-success">
	 	
	 	<?php 
	 	echo $_SESSION['success'];
	 	unset($_SESSION['success']); 
	 	?> 
	   </h1>

	 <?php
	 }
	?>




	<h1 class="text-success text-center display-2">Welcome to MITS</h1>
	<br><br><br>


	<center>
	<h1>welcome <?php  echo $_SESSION['n'] ?></h1>


	<center>
	<h3>Choose where u want to take addmission</h3>
	<a href="job_btech.php"><button class="btn btn-outline-success btn-lg cust1">BTECH</button></a>
	<a href=""><button class="btn btn-outline-danger btn-lg cust1">MTECH</button></a>
	<a href=""><button class="btn btn-outline-warning btn-lg cust1">BARCH</button></a>
	<a href=""><button class="btn btn-outline-light btn-lg cust1">MCA</button></a>
	</center>

	
	<center>
	<a href="job_user_display.php"><button class="btn btn-outline-info  cust2">ur data</button></a>


	<a href="job_logout.php"><button class="btn btn-outline-dark  cust2"  >logout</button></a>
	</center>

	

	<!-- <a href="job_btech_display.php"><button class="btn btn-outline-success btn-lg">personal data</button></a> -->

	
</div>
</body>
</html>