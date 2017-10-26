<?php
// different types display date in php;


$date1=date('d/m/Y');

echo "<br> date is: ".$date1;


$date2=date('d-m-Y');

echo "<br>".'date is '.$date2;


$date3 =date('Y/m/d');

echo '<br>'.'date is:'.$date3;


// display time 


$time=date('h:i:sa');
echo '<br>'.'time is'.$time;


$date5=date('Y');

echo "<br>".'day is: '.$date5;



/*
open

date is: 22/07/2017
date is 22-07-2017
date is:2017/07/22
time is01:38:03pm
day is: 2017
*/
?>