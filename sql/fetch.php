<?php
$username="root";//default
$servername="localhost";
$password="";
$database="contact form";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());

}
echo " connection was successful";
   echo "<br>";
   //selelct table
$sql="SELECT * FROM `tocontact`";
//send query
$result=mysqli_query($conn,$sql);
//print no of rows 
 $num=mysqli_num_rows($result);//print number of rows in table
 echo $num;
    echo " records found in the database <br>";
 // display data of row
 if($num>0){
     /*one row for one command
    $row=mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row=mysqli_fetch_assoc($result);
    echo var_dump($row);*/
       echo "<br>";
       // fetch all records
    while($row=mysqli_fetch_assoc($result)){
    //echo var_dump($row); print associate array for all records
    echo $row['sr'] ." heloo"." ".$row['name']. " ".$row['email']." ".$row['description'];
       echo "<br>";
    }
 }
?>