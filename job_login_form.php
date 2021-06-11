<?php  

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		
	<link rel="preconnect" href="https://fonts.gstatic.com">
	

  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		p{
			    margin-top: 35px; font-weight: 200;color: white;
		}
		.position{
			float: right;
		}
		.bg{
			background: url(2.jpg) ;
			background-repeat: no-repeat;
			background-size: cover;

		}

		.border{
			background: #0000008c;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			border: 0;
			outline: none;
		}

		.fa{
			/*border: 2px solid;*/width: 35px;padding: 9px;background: white;border: 0; outline: none;
		}
	</style>
</head>
<body class="bg">
<div class="container-fluid  ">

	<?php  

	if(isset($_SESSION['error'])){

	?>

	<h1 class="alert alert-danger">


	<?php  
		echo $_SESSION['error'];


	
		unset($_SESSION['error']);

	}


	?>
	</h1>



	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 border">
			

			<h1 class="text-center text-warning ">Login Form</h1>
			<form method="post" action="job_login_insert.php">
				<div class="form-group">
				<label class="text-warning"><b>Email:</b></label>
				<div class="input-group">
					<i class="fa fa-user icon"></i>
					<input type="text" name="email" class="form-control" style="border: 0;" >
				</div>
				</div>
				<div class="form-group">
				<label class="text-warning"><b>Password:</b></label>
				<div class="input-group">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="text" name="password" class="form-control" style="border: 0;">
				</div>
				</div>

				<button class="btn btn-primary">Log in</button>
				<p class="text-right input">*don't have account then click on sign up </p>			
			</form>
			<a href="job_signup.php"><button class="btn btn-warning text-right position">Sign up</button></a>
		    
		</div>
	<div class="col-md-4">		
	</div>
	</div> <!-- row end -->
</div>   <!-- container end -->
</body>
</html>