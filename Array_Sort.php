<?php
//sorting in php

//define array
$My_Array=array(3,6,1,2,8,10,43,12,14);

// print array;

echo "Array Before Sort:";
print_r($My_Array);

// output is Array Before Sort:Array ( [0] => 3 [1] => 6 [2] => 1 [3] => 2 [4] => 8 [5] => 10 [6] => 43 [7] => 12 [8] => 14 )


sort($My_Array);
$count=count($My_Array);
echo "<br> Array After sort: <br>";

for($i=0;$i<$count;$i++)
{
	
	
	echo "<br>"."value is ".$My_Array[$i];
	
	
}



/*
Op

Array After sort: 

value is 1
value is 2
value is 3
value is 6
value is 8
value is 10
value is 12
value is 14
value is 43

*/

// default sort is ascending sort

rsort($My_Array);


for($j=0;$j<$count;$j++)
{
	echo "<br>"."Descending Sort Value is: ".$My_Array[$j];
	
	
}

/*

Op


Descending Sort Value is: 43
Descending Sort Value is: 14
Descending Sort Value is: 12
Descending Sort Value is: 10
Descending Sort Value is: 8
Descending Sort Value is: 6
Descending Sort Value is: 3
Descending Sort Value is: 2
Descending Sort Value is: 1
*/


// define array with key value pair

$keyValueArray=array(1=>'sunday',3=>'Tuesday',4=>'Friday',2=>'Monday',8=>'Wensday',6=>'Saturday');

echo "<br><br>"."Key Values".'<br><br>';

var_dump($keyValueArray);

sort($keyValueArray);


$countval=count($keyValueArray);

for($m=0;$m<$countval;$m++){
	
	echo "<br>".'Sort Array is : '.$keyValueArray[$m];
	
	
}

/*
default sort asceding order sort:

op is

Sort Array is : Friday
Sort Array is : Monday
Sort Array is : Tuesday
Sort Array is : sunday

*/


// sort by keys not values

// use function ksort

rsort($keyValueArray);

for($n=0;$n<$countval;$n++)
{
	
	
	echo "<br><br>".'Sort By Keys :'.$keyValueArray[$n];
}




/*

Sort By Keys :sunday

Sort By Keys :Wensday

Sort By Keys :Tuesday

Sort By Keys :Saturday

Sort By Keys :Monday

Sort By Keys :Friday
*/




?>
