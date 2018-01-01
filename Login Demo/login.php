<?php
// now create Login for user
//connect to database
// now connect database & write query for login user 
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
	
	$query="SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
	// now execute query
	$mysqli_execute=mysqli_query($mysqli,$query);
	
	$row=mysqli_num_rows($mysqli_execute);// check username & password exist or not
	if($row>0)
	{// here if exist goto welcome page
		header("location:welcome.php?q=".$username."");
		
	}else{	// goto register page
	// now check what is error
	//echo $query;
	//echo "check error".mysqli_error($mysqli);
	header('location:register.php');
	}
	
}else{
	
	echo "not connected".mysqli_error($mysqli);
}

?>