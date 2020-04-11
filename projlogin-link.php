<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include('lib.php');
if($_POST){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query="SELECT * FROM `studen_record` WHERE `username`='$user'";
	$data=mysqli_query($con,$query);
	$row=mysqli_fetch_array($data);
	if($row['username']=$user){
		if($row['password']=$pass){
			echo "welcome user";
			$_SESSION['user']=$row['username'];
			$_SESSION['id']=$row['id'];
			header('location:userprofile.php');
			
			}
			else{
				echo "incorrect password";
				}
	}
	else{
		echo "invalid username";
		}
}
else{
	header('location.loginproject.php');
	}
?>
</body>
</html>