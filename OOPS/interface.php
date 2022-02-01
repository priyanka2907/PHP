<?php

interface test{
	
	//public static  $PI = 3.14; // interface no containce variables
	//abstract function test1();// error interface default methods are public
	public function  test1();
	
	/*{echo "e";
	};*/ //interface method can not contaice body
	
}
class child1 implements test{
	
	public function test1(){
		
		echo "inside child";
	}
	
}
class child2 implements test{
	
	public function test1(){
		
		echo "inside child2";
	}
}

//$obj = new test();//can not create object of interface
$obj = new child1();
$ans = $obj->test1();

echo $ans;


$obj2 = new child2();
$ans2 = $obj2->test1();

echo $ans2;
?>