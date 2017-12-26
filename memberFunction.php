<?php
// PHP Call Member Function 
// define one class with varibale & member function_exists

class mobile{
	// define variables
	var $price;
	var $title;
	
	// define member function_exists
	public function setPrice($var)
	{
		// assign value to variables
		
		$this->price=$var;
	}
	// write another function to set price
	
	public function getPrice()
	{
		
		echo $this->price."<br>";
	}
	public function setname($name){
		
		$this->title=$name;
	}
	public function getname()
	{
		echo $this->title."<br>";
		
	}
	
	
}

$mymobile=new mobile(); // create object of mobi function
$mymobile->setname("Samsung");// assign value
$mymobile->setPrice(10000);// assign value
$mymobile->getname();// display value
$mymobile->getPrice();// display value


/*
output_add_rewrite_var
Samsung
10000

*/
?>