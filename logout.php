<?php 
session_start();
$email = $_SESSION['email'];
unset($email);
session_destroy();
header("location : variables.php");
?>