<?php

trait c1{
	public function display(){
		
		echo "inside c1";
	}
}
trait c2{
	
	
}

class child {
	use c1,c2;
	
	public function display1(){
		
		echo "inside child";
	}
	
}

$o = new child();

echo $o->display();

//echo display();
?>