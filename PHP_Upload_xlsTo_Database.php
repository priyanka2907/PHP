 
 
 <?php
 
   
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'test');  


 $file = "data1.xls";
 $handle = fopen($file, "r");
 $c = 0;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {

 $email = $filesop[0];
  $name ='';
$data=explode("\t", $email);

$sql = mysqli_query($conn,"INSERT INTO student (id, uid,datetime,punch1,punch2,punch3,punch4) VALUES ('$name','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')");
 }

  if($sql){
 echo "You database has imported successfully";
 }else{
	 
	 echo mysqli_errno($conn);
 echo "Sorry! There is some problem.";
 }

 ?>