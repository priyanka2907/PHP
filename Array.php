<?php

//array in php
// deine array
$array_Name=array(2,5,1,7,3,4,8);

print_r($array_Name);

// output: Array ( [0] => 2 [1] => 5 [2] => 1 [3] => 7 [4] => 3 [5] => 4 [6] => 8 );


// array lenght;

$array_lenght=count($array_Name);

echo "Lenght Of Array Is:".$array_lenght;

// output : Lenght Of Array Is:7;

// display all emement from array using for loop:



for($i=0;$i<$array_lenght;$i++) //use for loop for display all array elements
{
	
	
	echo "<br>".$i." Array Element is".$array_Name[$i]; // print elements
	

	
}


/* Output is 0 Array Element is2
1 Array Element is5
2 Array Element is1
3 Array Element is7
4 Array Element is3
5 Array Element is4
6 Array Element is8
*/








?>
