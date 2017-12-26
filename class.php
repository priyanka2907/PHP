<?php
//PHP class & object Examples:
// define one class using class keyword

class Book{
	// this is class structure
	// define function inside class
	
	public function name(){
		
		echo "Boob Name Is : Learn PHP<br>";
		
	} 
	
	// define another function 
	
	public function price()
	{
		// return price value
		echo "Book Price is 10000 Rs/-";
		
	}
}

// now create object of class
$obj=new Book();

$obj->name();// call name function
$obj->price();// call price function


/*
output 

Boob Name Is : Learn PHP
Book Price is 10000 Rs/-

*/


?>