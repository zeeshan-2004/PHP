<?php
$username="root";
$servername="localhost";
$password="";
$database="third";


//create connection using procedarl
$conn=mysqli_connect($servername,$username,$password,$database);
//test connection
if(!$conn){
    die ("connect was not successful and error is :".mysqli_connect_error());
}
else{
    echo "connection was successful ";
}
      echo "<br>";


 //create db using procedarl
// $sql="CREATE DATABASE third";
// if(mysqli_query($conn,$sql)){
//  echo "database created successfully";
// }
// else{
//     echo "database not created successfully".mysqli_error($conn);
// }
//  echo "<br>";

//create table 
$sql="CREATE TABLE train(
no INT PRIMARY KEY,
name VARCHAR(50),
distance VARCHAR(50) ,
source VARCHAR(50),
destination  VARCHAR(50)
)";
if(mysqli_query($conn,$sql)){
 echo "database created successfully";
}
else{
    echo "database not created successfully".mysqli_error($conn);
}

?>