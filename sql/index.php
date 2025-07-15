<?php
// using procedural
echo "connect with database <br>";
// Localhost connecting with database
$username="root";//default
$servername="localhost";
$password="";// blank not even space
//create connection 
$conn=mysqli_connect($servername,$username,$password);
//test connection
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());

}
echo " connection was successful";
   echo "<br>";

//create database using php
$sql="CREATE DATABASE first";
//check if exist or not
/*$result=mysqli_query($conn,$sql);
echo var_dump($result);*/
      echo "<br>";
//test connection
if(mysqli_query($conn,$sql)){
    echo "database created successfully";
}
 else{
         echo "database not created successfully ".mysqli_error($conn); 
    }
?>
