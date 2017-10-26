<?php

session_start();



$name=$_SESSION['name'];// previously define seesion name
$id=$_SESSION['id'];//define session id


echo "name is: ".$name;

echo "<br>".'session id is'.$id;

// your session remains same value until  you distroy it.

//because of you try to access session value after destroyed

?>