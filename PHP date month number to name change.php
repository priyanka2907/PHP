<?php
// using php change month number to month name

$month=4; // month in number

$displayName=date("F",mktime(0,0,0,$month,10)); // function to convert number to name 

echo $displayName; // display month name

/*
OP:-
April

*/


?>