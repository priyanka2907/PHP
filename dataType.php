<?php
// data types in php
// int,string,float,boolean,array,boject

// interger

$int=2;

echo "<br> Interger No is: ".$int;
// float
$float=3.1;

echo "<br> Float value is: ".$float;
// string
$string="Welcome User";

echo "<br> String is: " .$string;


//boolean 
$true="true";
$false="false";

// array

$a=array('PHP','HTML','CSS');

echo"<br> Arrya Is: ";
var_dump($a);


// boject

class MyName // define class
{
	
	function MyName() // define function
	{
		
		
		$this->p='PHP'; // assign value to p
		
	}
	
	
	
	
}


$obj=new MyName(); // craete object of MyName

echo "<br> Object output is ";

echo $obj->p; // call value using object

?>