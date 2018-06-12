<!DOCTYPE html>
<html>
<head>
	<title>Session Code</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<h3><center>Demo - Session</center></h3>
<?php
session_start();

if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
     
echo"views = ".$_SESSION['views'];
echo "<br>";

$email = $_SESSION['email'];
echo "Session Email Id : "."$email"."<br>";

$user = "root"; 
$password = "root"; 
$host = "localhost"; 

$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}

?>
<hr/>	  

<table  class="table table-bordered">
	<thead>
		<th>Table Name </th>
		<th>Click Here </th>
	</thead>
<tbody>
<?php
$showtables= mysql_query("SHOW TABLES FROM assignment");

while($table = mysql_fetch_array($showtables)) 
{ 
    echo "<tr><td>";
    echo($table[0] . "\n");  
    echo "</td>
    <td><a href='data.php?var=$table[0]'>View Content</a></td>
    </tr>"; 
}
?>
</tbody>
</table>

</body>
</html>