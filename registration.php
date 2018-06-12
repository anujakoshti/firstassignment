<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h3><center>Session Demo</center></h3>
	<div class="row">
	<form action="backregist.php" method="post">
		<div class="panel panel-default">
			<div class="panel-heading"><center>Registration Form</center></div>
				<div class="panel-body">
					<label>EmailId : </label>
					<input type="text" name="email" placeholder="Please enter Email Id:" class="form-control">
					<label>Password : </label>
					<input type="Password" name="password"  placeholder="Please enter Password:" class="form-control">
					<label>Re-Enter Password : </label>
					<input type="Password" name="password2"  placeholder="Please enter Password:" class="form-control">
					<div align="right"><hr/>
						<input type="submit" name="Submit" class="btn-primary" value="Submit">	
						<input type="reset" name="Reset" class="btn-default" value="Reset">	
					</div>
				</div>
			</div>
	</form>	
		</div>
		
	</div>

</div>

</body>
</html>