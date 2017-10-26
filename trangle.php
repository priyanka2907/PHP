<?php
// triangle pattern using php

echo "Triangle pattern is , ".'<br><br><br>';

for($i=0;$i<5;$i++)// for loop for row
{// execute loop from 0 to 4 means 5 rows
	
	for($j=$i;$j<5;$j++)// use for display * in each row
	{
		
		echo "*";// display *
	}
	
	echo "<br>";// after each row count add <br> for new line
}

/*
op 
==============
Triangle pattern is , 


*****
****
***
**
*
===========
*/

?>