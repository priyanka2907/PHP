<?php

class student
{
	
	    function getPrice($price){
         echo $price ."<br/>";
      }
      
   
	
}

  $obj = new student;
  
  $obj->getPrice(6);
  
?>