<?php
// PHP Interface Example
// define interface using interface keyword
interface A{
	public function setProperty($a);
	// define function inside interface
	public function description();	
}// here we define two function inside interface
// class can be extended and interface can implemets
class mango Implements A{
	public function setProperty($a)
	{
		$this->a=$a;
	}
	
	public function description()
	{
		echo "describing ".$this->a.' tree';
	}
}
$obj= new mango(); // here we created object of class
$obj->setProperty('Mango'); // call function
$obj->description();// call function


// here Implements is a keyword
// output describing Mango tree
?>