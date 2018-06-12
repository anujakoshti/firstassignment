
<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h3>Assignment</h3></center>
<div class="container">	
		<div class="row">
		<div align="right">
				<a href="login.php" class="btn btn-primary">Login</a>
				<a href="registration.php"> Registration</a>
		</div><hr/>
			<div class="col-md-6">
				<div class="panel panel-default">
				<div class="panel-heading">Integer</div>
					<div class="panel-body">
						<?php						
						$x = 5;
						$y = 5;
						$z = $x + $y;
						echo "The value of addition is :"."$z"."<br>";
						?>				
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-default">
				<div class="panel-heading">String</div>
					<div class="panel-body">
						<?php
						$string1 = "Drupal";
						$string2 = "CMS";
						echo "String :"."$string1" ." ". "$string2"."<br>";
						?>				
					</div>
				</div>		
			</div>
		</div>

<hr/>
<div class="col-md-4">
				<div class="panel panel-primary">
				<div class="panel-heading">Comparison Operator</div>
					<div class="panel-body">
						<?php
							//Comparison operator
							$val1 = 20;
							$val2 = 30;
							if($val1 <= $val2)
							{
								echo "val1 : ".$val1 . " is smaller than val2 : ".$val2 ;
							}
							else
							{
								echo "val2 is greater than val1.";	
							}
						?>

					</div>
				</div>
				
</div>
<div class="col-md-4">
	<div class="panel panel-primary">
				<div class="panel-heading">String Frunction</div>
					<div class="panel-body">
					<?php
						$str = "Demo for String Function!";
						echo $str . "<br>";
						echo trim($str,"Demo");
					?>
					</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-primary">
				<div class="panel-heading">Array Frunction</div>
					<div class="panel-body">
					<?php
						$arr = array("Demo","for","Array","Function");
						echo implode($arr, " ");
						array_push($arr,"!");
						echo "<br>";						
						print_r($arr);
					?>
					</div>
	</div>
</div>
<hr/>

<div class="col-md-offset-2 col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading"><center>Include & File Upload</center></div>
			<div class="panel-body">
				<h1>Demo Code</h1>
					<?php include 'page1.php'; ?><hr/>

					<form action="page2.php" method="post" enctype="multipart/form-data">
						<label>Today's Date : </label>
						<?php echo date("d/m/Y"); ?><br><br>
						<label>Name : </label>
							<input type="text" name="name" placeholder="Please enter name" class="form-control" required=""><br><br>
						<label>Mobile Number : </label>
							<input type="text" name="mob" placeholder="Please enter mobile" class="form-control" required=""><br><br>
						<label>Upload Document : </label>
							<input type="file" name="upload"><br><br>
						
							<div align="right">
								<input type="submit" name="Submit" class="btn-primary">
								<input type="reset" name="reset">								
							</div>
							
					</form>

			</div>
	</div>
</div>

</div>
</body>
</html>



