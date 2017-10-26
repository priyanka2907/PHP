<?php
// if in php

$test='1';

if($test=='1'){
	// execute block
	
	echo "inside if Condition ".$test;
	
	
	
}



// if else condition 
// when if condition false then execute else block\



if($test=='2')
{
	
	
	echo "<br>inside if block ".$test;
	
}
else{
	
	echo "<br>inside else block " .$test;
	
}




// if()elseif() else
// multiple if conditions with else block
// if first if false it goes next elseif block if elseif false then goes else so on....

if($test=='11')
{
	
	echo"<br> inside first if ".$test;
	
}elseif($test=='11')
{
	
	echo"<br> inside Second if ".$test;
	
	
}else{
	
	
	
	echo"<br> inside else if ".$test;
}


?>