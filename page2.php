<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$name = $_POST['name'];
$mob = $_POST['mob'];

echo "Details are:"."<br>";
echo "Name : ".$name ."<br>";
echo "Mobile : ".$mob ."<br>";


    if(isset($_FILES['upload'])){
      $errors= array();
      $file_name = $_FILES['upload']['name'];
      $file_size =$_FILES['upload']['size'];
      $file_tmp =$_FILES['upload']['tmp_name'];
      $file_type=$_FILES['upload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['upload']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }         
      if(empty($errors)==true)
      {
        
         move_uploaded_file($file_tmp,"assignment/images/".$file_name);
         echo "Image uploaded successfully..!";        
      }
      else
      {
         print_r($errors);
      }
   }



?>

</body>
</html>