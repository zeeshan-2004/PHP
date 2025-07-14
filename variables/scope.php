<?php
echo "scope of  variables";
echo "<br>";
$a=80;
$b=60;
function scope(){
    $a=50;// local variable
    echo $a; // 50
          echo "<br>";
          global $b; //access global varaible
          echo $b;  
           echo "<br>";
           $b=100; // update global variable 
            echo $b;  
           echo "<br>";
};
scope();
echo $a;
 echo "<br>";
   echo $b; // 100
    echo "<br>";
   echo var_dump($GLOBALS);
   echo var_dump($GLOBALS["a"]); // print $a global

    echo "<br>"; 
   // global variables
$fName="john";
$lName="doe";
function printN(){
       global $fName, $lName;
       echo  $fName ." ".$lName;
    
   
};

printN();

   echo "<br>";
   $x=($GLOBALS['lName']);
echo $x;
   echo "<br>";
//global 
$counter=0;
function funinc(){
 global  $counter;
     echo  ++$counter;
  
}

function douinc(){
 global  $counter;
     echo  $counter *=2;

}
 funinc(); // 1
 echo "<br>";
 douinc(); //2
  echo "<br>";
 echo $counter; //2
  echo "<br>";

 //$GLOBAL
 $num=10;
 function sq(){
    // $a=$GLOBALS["num"];
    // $a*=2;
    //  echo $a;
    $GLOBALS["num"]*=2;
 }
sq();
echo $num;
  echo "<br>";
  $city="newYork";
  $country="USA";
  function location(){
    $a=$GLOBALS['city'];
    $b=$GLOBALS['country'];
    $GLOBALS['location']=$a.",".$b;
  }
 location();
 echo $location;
?>