<?php

$username="root";
$servername="localhost";
$password="";
$database="second";
//create connection 
$conn=mysqli_connect($servername,$username,$password,$database);
//test connection
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());

}
echo " connection was successful";
  mysqli_select_db($conn, "second");
   echo "<br>";

   mysqli_select_db($conn, "second");

   //create tables
   $sql="CREATE TABLE user(
id INT PRIMARY KEY,
name VARCHAR(50) ,
cnic VARCHAR(50),
gender VARCHAR(50),
mobileNo VARCHAR(50)
)";
//test table creation
if(mysqli_query($conn,$sql)){
    echo "table created successfully";
       echo "<br>";
}
 else{
         echo "table not created successfully ".mysqli_error($conn); 
            echo "<br>";
    }

?>