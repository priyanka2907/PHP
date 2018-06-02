<?php

//it will display your php version information

 //phpinfo();
 // array constant defined using defined function_exists
 //-IntlChar(),intdiv(),random_bytes(),random_int()
 
 // define array using defined function_exists
 define('animals',['Dog','Cat','Bird']);
 print("\n constant value of animal array is :");
 print(animals[0]);
 
 
 // IntlChar()
 print("<br><br><br>PHP IntlChar() example<br>");
 printf('%x',IntlChar::CODEPOINT_MIN);
 print("<br>");
 printf( IntlChar::charName('&'));
  print("<br>");
 printf(IntlChar::ispunct('!'));
 
 //intdiv()
  print("<br><br> intdiv() example<br><br>");
 $value=intdiv(60,5); // integer division
 var_dump($value);
 print("");
 print($value);
 
// now we see Random_bytes(),Random_int()
 
 
  print("<br><br> Random_bytes() example<br><br>");
 
 $bytes=Random_bytes(5);
 
 print(bin2hex($bytes));
 
  print("<br><br> Random_int() example<br><br>");
 
 
 print(Random_int(100,999)); // for random int
 print("");
 print("<br>");
 print(Random_int(-100,0));// for random -ve int
 
 //Thank You...
 
?>