<?php
// we have created two form login & register
// now create database 
// now connect database & write query for add user record
$host='localhost';//hostname
$user='root';//username
$pass='';//passowrd mysql phpmyadmin
$db='Employee';//database name


// now connect to database

$mysqli=mysqli_connect($host,$user,$pass,$db);
// we pass four parameters for connection
// now check database connected or not

if($mysqli)
{
	// now write query for insert
	// get values from register form
	$username=$_POST['username'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];
	$query="INSERT INTO `user`(`id`,`username`,`password`,`usertype`)VALUES(0,'$username','$password','$usertype')";
	// now execute query
	$mysqli_execute=mysqli_query($mysqli,$query);
	
	if($mysqli_execute)
	{// here if inserted goto register page with success msg
		header('location:register.php?q=success');
		
	}else{	// else error message
	// now check what is error
	echo mysqli_error($mysqli);
	//header('location:register.php?e=error');
	}
	
}else{
	
	echo "not connected".mysqli_error($mysqli);
}

?>