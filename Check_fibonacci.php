<?php
// fibonacci series in php

$a=0;// initialize variables
$b=1;
$n=10;
// n for how many number 
echo "fibonacci series is ".'<br>';// display message
echo $a.','.$b.',';// inittially display values of a&b

for($i=0;$i<$n;$i++)// for loop form 0 to value of n
{
	$c=$a+$b;// each time add last & second last value
	echo $c.','; // display result
	$a=$b;// assign last value to second last
	$b=$c;// assign answer value to last value 
	// swapptwo values.
	
	
	
}


//op fibonacci series is 
//0,1,1,2,3,5,8,13,21,34,55,89,

?>