<?php 
include'dbcon.php';
$id=$_GET['id'];

$edit="select * from job where id=$id";
$instructor=mysqli_query($con,$edit);

$query=mysqli_fetch_array($instructor);

?>

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

	<h1>BTech Admission-Form</h1>
	<form method="post" action="job_admin_update.php">
		<input type="hidden" name="id" value="<?php  echo $query['id']  ?>">

		<div class="form-group">
			<label>full name</label>
			<input type="text" name="name" class="form-control" value="<?php  echo $query['name'] ?>">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="email" class="form-control" value="<?php  echo $query['email'] ?>">
		</div>
		<div class="form-group">
			<label>phone Number</label>
			<input type="text" name="phone" class="form-control" value="<?php  echo $query['phone'] ?>">
		</div>
		
		<div class="form-group">
			<label>D.O.B</label>
			<input type="date" name="dob" class="form-control" value="<?php  echo $query['dob'] ?>">
		</div>
		
		
		<div class="form-group">
			<label>gender</label>
			<input type="radio" value="male" name="gender" 

			<?php 
			if($query['gender']=="male"){
				echo "checked";
			}
			?>

			> male
			<input type="radio" value="female" name="gender" 

			<?php 
			if($query['gender']=="female"){
				echo "checked";
			}
			?>

			> female
		</div>
		
		<div class="form-group">
			<label>address</label>
			<textarea  class="form-control" name="address" rows="2"><?php  echo $query['address'] ?></textarea>
			
		</div>

		<div class="form-group">
			<label>marks in 10th</label>
			<input type="text" name="tenth" class="form-control" value="<?php  echo $query['tenth'] ?>">
		</div>
		<div class="form-group">
			<label>marks in 12th</label>
			<input type="text" name="twelth" class="form-control" value="<?php  echo $query['twelth'] ?>">
		</div>
		

		<button type="submit" class="btn btn-success">UPDATE</button>
		

	</form>
</div>
</body>
</html>
