<?php
$username="root";
$servername="localhost";
$password="";
$database="first";
//create connection 
$conn=mysqli_connect($servername,$username,$password,$database);
//test connection
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());

}
echo " connection was successful";
   echo "<br>";

   //insert records

   $a="ahmad";
   $b=33105;
  $sql="INSERT INTO `user` (`id`,`name`, `cnic`, `gender`, `mobileNo`) 
   VALUES ('3','ali', '33104', 'male', '0326')"; 
   $sql="INSERT INTO `user` (`id`,`name`, `cnic`, `gender`, `mobileNo`) 
    VALUE
     ('6','$a', '$b', 'male', '0326')";


//test insert records
if(mysqli_query($conn,$sql)){
    echo "records inserted  successfully";
}
 else{
         echo "records not  inserted  successfully ".mysqli_error($conn); 
    }
?>