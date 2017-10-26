<?php 
// now we can see chop();
//chop used for remove white space or bult in characters from right end side of string

$str="my New String Is! PHP";

$result=chop($str,'PHP');
echo $result; // remove PHP from string & stored inside result
/*
output

my New String Is!
*/

?>