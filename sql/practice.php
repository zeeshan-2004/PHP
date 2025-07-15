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
$sql="CREATE DATABASE third";
if(mysqli_query($conn,$sql)){
 echo "database created successfully";
}
else{
    echo "database not created successfully".mysqli_error($conn);
}
 echo "<br>";

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
 echo "<br>";
$s='INSERT INTO train(no,name,distance,source,destination)
VALUES
(1130,"express","839KM","PESHAWAR CANTT","QUETTA")';
if(mysqli_query($conn,$s)){
 echo "record iserted created successfully";
}
else{
    echo "record iserted not created successfully".mysqli_error($conn);
}
?>