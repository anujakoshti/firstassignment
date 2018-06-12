<?php 
include("db.php");
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$sql = "insert into tbl_regist(email,password,password2) values('$email','$password','$password2')";
$result = mysqli_query($conn,$sql);
if($result)
{
	echo "Data inserted successfully";
	?>
	<script type="text/javascript">
		window.location ='login.php';
	</script>
	<?php

}
else
{
	echo "Data not inserted..!!";
}

?>