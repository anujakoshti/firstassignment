<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php 
include("db.php");
$email = $_POST['email'];
$password = $_POST['password'];
$tbl_name = $_GET['var'];
//echo "$tbl_name";

$sql = "SHOW COLUMNS from $tbl_name";
$result = mysqli_query($conn,$sql);
echo "<table class='table table-bordered'><tr>";
while($row = mysqli_fetch_row($result))
{
	//print_r($row);
	echo "<th>$row[0]</th>";

}


//$sql1 = "select count(*) from $tbl_name";
$sql1 = "SELECT count(*) FROM information_schema.columns WHERE table_name = '$tbl_name'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_row($result1);
$no_of_columns = $row1[0];
//echo "$no_of_columns";


$data1="select * from $tbl_name";
$data = mysqli_query($conn,$data1);
while($result=mysqli_fetch_row($data))
{
		echo "<tr>";
		for($j=0;$j<$no_of_columns;$j++)
		{
			echo "<td>$result[$j]</td>";
		} // end of for loop displaying one row
		  echo "</tr>";    
} // end of while loop

echo "</table>";
?>

<div align="right">
	<a href="session.php" class="btn btn-primary"> Back</a>
</div>

</body>
</html>