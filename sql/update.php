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
$sql="SELECT * FROM `tocontact` WHERE `name`='zeeshan' "; //extract data using where clause
//send query
$result=mysqli_query($conn,$sql);
//print no of rows 
 $num=mysqli_num_rows($result);//print number of rows in table
 echo $num;
   echo "<br>";
   $no=1;
 if($num>0){
        while($row=mysqli_fetch_assoc($result)){
    //echo var_dump($row); print associate array for all records
    echo $no ." heloo"." ".$row['name']. " ".$row['email']." ".$row['description'];
       echo "<br>";
       $no++; // give numbering manaully because fetch diffent index
    }
 }

 $sql="UPDATE `tocontact` SET `name` = 'zeeshan2 ' WHERE `sr' = 2 ";
 $result=mysqli_query($conn,$sql);
 echo var_dump($result);
 $rowno=mysqli_affected_rows($conn);
 echo $rowno;
   echo "<br>";
 if($result){
    echo "successful update";
 }
 else{
   echo "update not successful".mysqli_error($conn);
 }
   
 
 ?>