<?php
echo "functions";
 echo "<br>";
 function marks($m){
    $sum=0;
    foreach($m as $x){
    $sum+=$x;
    }
    return $sum;
 }
 function avg($n){
    $avg=0;
    $sum=0;
    foreach($n as $y){
    $sum+=$y;
    $avg++;
    }
    return $sum/$avg;
 }
 $umar=[100,50,50,100];
 $ahsan=[100,80,20,50];
 $result=marks($umar);
 $res=avg($umar);
 $final=marks($ahsan);
 $fin=avg($ahsan);
 echo "marks for umar are  $result and average is $res <br>" ;
 echo "marks for ahsan are  $final and average is $fin <br>" ;

 //date functions
 echo "date functions <br>";
 echo date("dS D l j F");
 echo "<br>";
 $da=date("l,F j,Y");
echo "today is $da";

// today is Sunday,July 13,2025
echo "<br>";
//day,year,month
echo date("Y-n-j");
//2025-7-13
echo "<br>";
echo date("j-m-Y");
// 13-07-2025
echo "<br>";
echo date("l,F ");
//Sunday,July
echo "<br>";
echo date("j-M-y");
echo "<br>";
// 13-Jul-25

//time
echo date_default_timezone_set("Asia/Karachi");
echo "<br>";
echo date("h:i:s A");
//03:42:18 PM
echo "<br>";
echo date("H:i:s");
//15:42:18
echo "<br>";
echo date(" A");
// PM
?>    