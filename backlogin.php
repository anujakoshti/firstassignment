<?php 
include("db.php");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select email,password from tbl_regist where email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$sql);
if($result)
{
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['views'] = 0;
	?>
	<script type="text/javascript">
		window.location ='session.php';
	</script>
	<?php

}
else
{
	echo "Data not inserted..!!";
}

?>