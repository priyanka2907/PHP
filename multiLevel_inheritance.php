<?php
// multi level inheritance example
// first class extends second & second extends third

// define first class

class A{
	public function MyAge()
	{
		return 'My Age is 80<br>';
		
		
	}
	
}

// define second class which is extends first

class B extends A{
	// define function
	public function MySonAge()
	{
		return "My Son Age is 50<br>";
		
	}
}

// define third class which is extends second class

class C extends B
{
	// define function 
	
	public function MyGrandSon()
	{
		return "My Grand Son Age is 20<br>";
	}
	// write on function to display all function return value

public function MyHistory()
{
	echo "class A ".$this->MyAge();
	echo "class B ".$this->MySonAge();
	echo "class C ".$this->MyGrandSon();
	
}	
	
}


// now create boject of function..
$obj= new C();
$obj->MyHistory();// call function using object

/*
output


class A My Age is 80
class B My Son Age is 50
class C My Grand Son Age is 20
*/

?>