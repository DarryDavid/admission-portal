<?php  

include 'job_session.php'

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
			<th>S.no</th>
			<th>name</th>
			<th>email</th>
			<th>phone</th>
			
			<th style="color: red;">MORE</th>
			</tr>

	<?php
	$i=1;
	include'dbcon.php';

	$id=$_SESSION['sid'];
	//echo $id;

	//$select="select * from job order by id desc";

	$select="select * from job where student_id=$id";

	$instructor=mysqli_query($con,$select);
	// echo "<pre>";
	// print_r($instructor);

	 //$query=mysqli_fetch_array($instructor);
	 // echo "<pre>";
	 // print_r($query);

	$query=mysqli_fetch_array($instructor);
		//echo "<pre>"
		//print_r($query);

	


	?>

		



			<tr>
				<td><?php echo $i ; ?> </td>
				<td><?php echo $query['name'] ?></td>
				<td><?php echo $query['email'] ?></td>
				<td><?php echo $query['phone'] ?></td>
				
				<td>
					<a href="job_admin_view.php?id=<?php echo $query['id'] ?>">view</a>
					<a href="job_admin_edit.php?id=<?php echo $query['id'] ?>">edit</a>
					<!-- <a href="job_admin_delete.php?id=<?php //echo $query['id'] ?>">delete</a> -->  
						<!-- not giving access to delete data to users -->

				</td>
				
				
			</tr>

		                  
		
			

		</table>


		

<a href="job_logout.php"><button class="btn btn-outline-dark btn-lg">logout</button></a>

		
		
	</div>

</body>
</html>