<!DOCTYPE html>
<html>
<body>
<p><h2>PHP Email Validations</h2> </p>

<?php

// write php code for email check:

$email='demo@gmail.com';

// remove illegal characters from email:

$email=FILTER_VAR($email,FILTER_SANITIZE_EMAIL);

// validate email id using if else loop:
// FILTER_VALIDATE_EMAIL is a email validate function
if(!FILTER_VAR($email,FILTER_VALIDATE_EMAIL)===false) // we check not false in if condition
{// if valid it return true
	echo "$email <br> Is A Valid Email ID"; // here  display message	
	
}else{
	
	// if invalid it return false
	echo "$email <br> is Not a Valid Email ID";
}

?>

</body>
</html>
