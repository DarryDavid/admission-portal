<?php 

include'job_session.php'


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
	<form method="post" action="job_btech_insert.php">

		<input type="text" name="student_id" value="<?php  echo $_SESSION['sid']   ?>" >
		<!-- login insert se jo bhi login kr rha h uski id aa rhi h -->		


		<div class="form-group">
			<label>full name</label>
			<input type="text" name="name" class="form-control" value="<?php  echo $_SESSION['n'] ?>" readonly>
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $_SESSION['email']  ?>" readonly>
		</div>
		<div class="form-group">
			<label>phone Number</label>
			<input type="text" name="phone" class="form-control">
		</div>
		
		<div class="form-group">
			<label>D.O.B</label>
			<input type="date" name="dob" class="form-control">
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
			<label>marks in 10th</label>
			<input type="text" name="tenth" class="form-control">
		</div>
		<div class="form-group">
			<label>marks in 12th</label>
			<input type="text" name="twelth" class="form-control">
		</div>
		

		<button type="submit" class="btn btn-info">submit</button>
		

	</form>
</div>
</body>
</html>