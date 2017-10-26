<?php
// php chunk_split();
//it split string given no of characters.

$str="My First PHP File";// declare string
// it consider space as character.
// we used any character for spliting
$result=chunk_split($str,2,'*'); // here split string by 1 characters using '.'

echo $result; // echo result with split string using '.'
/*
 output
 
 My* F*ir*st* P*HP* F*il*e*

*/
?>