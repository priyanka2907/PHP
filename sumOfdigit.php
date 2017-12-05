<?php
// PHP Program Sum of Digits using function_exists

function sum_of_digits($number)// define function pass one value 
{
	$ans=0;// set one variable as 0
	
	for($i=0;$i<strlen($number);$i++)// for loop until number length 
	{
		// each time add each digit of given number 
		$ans=$ans+$number[$i]; //stored addition into variable 
		
	}
	return $ans;// return answer
	
	
}
// dispaly result
// call function &  pass value 
echo "Sum of given number digits is ".sum_of_digits('9876');
// op 15

?>