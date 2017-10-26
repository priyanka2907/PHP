<?php
// php word count function
$string='Hello PHP User!'; // first declare string!

$result1=str_word_count($string); // apply word count function

echo "string word count is:" . $result1; // display result:


// php string position function


$result2=strpos($string,'User');

echo "<br>string position is:".$result2;


// string reverse function:


$result3=strrev($string); // apply function strrev

echo "<br><br>reverse string is:" . $result3; // display result




?>