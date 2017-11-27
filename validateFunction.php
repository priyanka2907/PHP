<!DOCTYPE html>
<html>
<body>
<p><h2>PHP  Validation Function</h2> </p>
<h2>
<?php
// php function FILTER_VALIDATE_INT
//FILTER_VALIDATE_IP
//FILTER_VALIDATE_URL
// define interger variable first

$int =12;


if(!filter_var($int,FILTER_VALIDATE_INT)===FALSE) // check interger value
{
	
	echo "<br> $int <br> Given Number is Integer!";
	
}else{
	
	
	echo "<br> $int <br> Given Number Is Not Integer!";
}

// define url 

$url="https://ww.facebook.com";

if(!filter_var($url,FILTER_VALIDATE_URL)===FALSE) // check url
{
	
	echo "<br> $url <br> Given URL Is Valid URL";
	
}else{
	
	
	echo "<br> $url <br> Given URL Is Not Valid URL!..";
}

// define ip address
$ip='12.0.0.1'; // ip address

if(!filter_var($ip,FILTER_VALIDATE_IP)===FALSE) // check ip address is valid /not
	
	{
		echo "<br> $ip <br> Given IP Address Is Valid IP "; // diplay valid msg
		
	}else{
		
		echo "<br> $ip <br> Given IP Address Is Not Valid IP Address"; // display msg if invalid
	}

?>
</h2>
</body>
</html>