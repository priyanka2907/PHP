<?php
// use of function addslashes();
// function used for add extra slasheh  built in characters


$str="my name is! 'PHP'"; // declare string.

$new_string=addslashes($str);
echo $new_string;
/*

output:-
*************
my name is! \'PHP\'

*/


?>
