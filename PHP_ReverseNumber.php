<?php
// reverse number using PHP:

$num=1234;// define number
$ans=0;// define answer variable initial value set 0
echo "Given Number is :".$num.'<br><br>';// display answer
while($num!=0)// check number not 0
{
	// numeber %10 stored into temp
	$temp=$num%10;
	$ans=$ans*10+$temp;//save mod ans into ans 
	$num=(int) ($num/10);// divide by number into 10
	
	
}

echo "Reverse Number is :".$ans;// display answer

// op Given Number is :1234

//Reverse Number is :4321

?>