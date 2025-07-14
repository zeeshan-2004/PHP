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
   echo var_dump($GLOBALS["a"]); // print a global
?>