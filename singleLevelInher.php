<?php
// php example of single level inheritance
// define class  using inheritance we can define same function in both classes 

class A{
	// write function 
	
	public function printItem($string)
	{
		echo "Hi : ".$string.'<br>'; // return value using function
		
	}
	// write anither function
	
	public function printPHP()
	{
		echo "I am from India<br>";// return value by function
		
	}
	
}
// now write second class extend by first class

class B extends  A{
	// write function 
	
	public function printItem($string)
	{
		echo "Hi : ".$string.'<br>';
		
	}
	
	// write another function
	public function printPHP()
	{
		echo "I am fron US<br>";
		
	}
}


// now create object of both classes 

$a=new A();
$b = new B();
// call function using class object
$a->printItem('Jon'); // call function using object of class a
$a->printPHP();// call function using object of class a
$b->printItem('pitter');// call function using object of class B
$b->printPHP();// call function using object of class B
?>