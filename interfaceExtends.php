<?php
// interface can extended by another interface
// define interface one

Interface A{
	// define function inside interface
	public function Computer();
}
// define second interface which is extend to first interface

Interface B extends A{
	// define function 
	public function Divide();
	
	
}

// define third  interface which is extended by second
// here we craeted interface 
// replace interface with class 
// class always implements interface
class C Implements B{
	
	// define function
	public function Divide()
	{
		$var =10;
		$var1=2;
		$var3=$var/$var1;
		echo "Division of 10/2 is ".$var3.'<br>';
		
	} 
	
	
	// define another function
	public function Computer()
	{
		$a=2;
	$b =3;
	$c=$a*$b;
	
	echo "Multiplication of 2 & 3 is ".$c.'<br>';	
	}
}


// here create object 
// beacuse of we created object of class c
$obj= new C();

// call function using object
$obj->Divide();
$obj->Computer();
/*
note :- class always extends another class
class always implements interface
interface extends another interface
output:-


Division of 10/2 is 5
Multiplication of 2 & 3 is 6


*/
?>