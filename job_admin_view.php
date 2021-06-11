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

	$id=$_GET['id'];

	$select="select * from job where id=$id";

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