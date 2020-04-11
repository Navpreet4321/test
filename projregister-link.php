<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('lib.php');
//to add check on username
if($_POST){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query="SELECT * FROM `studen_record` WHERE `username`='$user' ";
    $data=mysqli_query($con,$query);
	echo $num_rows=mysqli_num_rows($data);
	if($num_rows>0)
	{
		echo "username already exist";
		echo "<a href='loginproject.php'>LOGIN</a>";
		}
	
		else{
			$query="INSERT INTO `studen_record`(`username`,`password`)VALUES('$user','$pass')";
			$data=mysqli_query($con,$query);
			echo "thaks for regd. login to continue<span>";
			echo "<a href='loginproject.php'>LOGIN</a>";
		}
}
 else{
	
	//echo 'error';
	
	//it will redirect the page to(same page) i.e, register.php. it will not allow to acess page directly from url link
	header('location:register.php');
}

?>
</body>
</html>