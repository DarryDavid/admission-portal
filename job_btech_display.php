 <!-- this pagr was made by me as hw-------it was meant to display data of single user who is logged in.....
 but later in next class sir did it very efficiently in job_user_display
 also job_user_display has options of view edit nd update which was missing in mine




  discarded
 -->













<?php  

include 'job_session.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center text-info display-4">DATA DISPLAY</h1>
		<br>
		<table class="table table-striped table-bordered">
			<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>phone</th>
			<th>dob</th>
			<th>gender</th>
			<th>address</th>
			<th>tenth</th>
			<th>twelth</th>
			<th>student id</th>		
			</tr>

	<?php
	include'dbcon.php';

	//$id=$_GET['id'];
	$id=$_SESSION['sid'];

	$select="select * from job inner join job_signup on job.student_id = job_signup.id where job.student_id=$id" ;

	$instructor=mysqli_query($con,$select);
	// echo "<pre>";
	// print_r($instructor);

	 $query=mysqli_fetch_array($instructor);
	 // echo "<pre>";
	 // print_r($query);

	?>

		



			<tr>
				<td><?php echo $query['id'] ?> </td>
				<td><?php echo $query['name'] ?></td>
				<td><?php echo $query['email'] ?></td>
				<td><?php echo $query['phone'] ?></td>
				<td> <?php echo $query['dob'] ?> </td>
				<td><?php echo $query['gender'] ?></td>
				<td><?php echo $query['address'] ?></td>
				<td><?php echo $query['tenth'] ?></td>
				<td><?php echo $query['twelth'] ?></td>
				<td> <?php echo $query['student_id'] ?> </td>
				
				
				
				
			</tr>

		
			

		</table>
		<a href="job_logout.php"><button class="btn btn-outline-dark btn-lg">logout</button></a>
		
	</div>

</body>
</html>