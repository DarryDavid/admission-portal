<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!----for mobile responsive--->
	<style>
		.container{
			width: 40%;
		}
	</style>
</head>
<body>
<div class="container ">

	<h1>Admission-Form</h1>
	<form method="post" action="job_insert.php">
		<div class="form-group">
			<label>full name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="text" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label>confirm password</label>
			<input type="text" name="cnfpassword" class="form-control">
		</div>
		<div class="form-group">
			<label>D.O.B</label>
			<input type="date" name="dob" class="form-control">
		</div>
		<div class="form-group">
			<label>phone Number</label>
			<input type="text" name="phone" class="form-control">
		</div>
		
		<div class="form-group">
			<label>gender</label>
			<input type="radio" value="male" name="gender" > male
			<input type="radio" value="female" name="gender" > female
		</div>
		
		<div class="form-group">
			<label>address</label>
			<textarea  class="form-control" name="address" rows="2"></textarea>
			
		</div>
		<div class="form-group">
			<label>Degree</label>
			<select class="form-control" name="degree">
			<option>Select</option>
			<option>Btech</option>
			<option>Mtech</option>
			<option>BArch</option>
			<option>MCA</option>
			</select>
		</div>

		<button type="submit" class="btn btn-info">submit</button>
		

	</form>
</div>
</body>
</html>



































.................................................................................................................



<!DOCTYPE html>
<html>
<head>
	<title>btech</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center text-info display-4">Data Display of BTECH students</h1>
		<br>
		<table class="table table-striped table-bordered">
			<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>password</th>
			<th>dob</th>
			<th>phone</th>
			<th>gender</th>
			<th>address</th>
			<th style="color: red;">edit</th>
			</tr>




<?php 
include'dbcon.php';

$btech="select * from job where degree='Btech'";
$instructor=mysqli_query($con,$btech);

$query=mysqli_fetch_array($instructor);

?>



			<tr>
				<td><?php echo $query['id'] ?> </td>
				<td><?php echo $query['name'] ?></td>
				<td><?php echo $query['email'] ?></td>
				<td><?php echo $query['password'] ?></td>
				<td><?php echo $query['dob'] ?></td>
				<td><?php echo $query['phone'] ?></td>
				<td><?php echo $query['gender'] ?></td>
				<td><?php echo $query['address'] ?></td>
				<td>
					<a href="job_edit.php?id=<?php echo $query['id'] ?>">edit</a>					
				</td>
				
				
			</tr>

		                  
		
			

		</table>
		
	</div>

</body>
</html>