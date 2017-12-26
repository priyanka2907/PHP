<?php
// Abstract class in PHP
//define abstract class using abstract keyword

abstract class Car{
	
	// define abstract function inside abstract class
	
	public abstract function getCompanyName();
    public abstract function getPrice();
	
}
// now define class which is extends to abstract class

class Baleno extends Car{
	// define function inside class
	public function getCompanyName();
	{
		return "Maruti Suzuki<br>";
		
	}
	
	
	// define another function
	
	public function getPrice()
{
	return '72000'.'<br>';
	
}
}

// now create object of class

$car =new Baleno();

echo $car->getCompanyName();
echo $car->getPrice();



?>