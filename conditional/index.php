<?php
// if statemtn
$a=4;
if($a>14){
    echo "you are boy";
}
else{
    echo "you are  children";
}
      echo "<br>";
$b=1;
if($b>15){
   echo "you can run";
}
elseif($b>3){
     echo "you can walk";
}
else
{
echo "you can see";
}
   echo "<br>";
$d=65;

if($d<25){
    echo "you cannot drive";
}
elseif($d>=25 && $d<=65){
    echo "you can drive";
}
elseif($d>65){
 echo "you cannot  drive";
}
else{
    echo "invalid iput";   
}
   echo "<br>";

   $age=22;
   $cg=4.00;
   $ex=2;
   if($age<18){
    echo "they are not eligible.";
   }
   elseif($age>=18 && $age<=25){
    if($cg>=3.5 && $cg<4.00){
         echo "they  are eligible for scholarship.";
    }
   elseif($cg==4.00){
 echo "they are eligible for honors scholarship .";
   }
   else{
     echo "they are not eligible.";
   }

   }
   elseif($age>25){
    if($ex>5){
        echo "they are eligible";
    }
    else{
        echo "they are not eligible";
    }
   }
   echo "<br>";
   // switch
   $c="red";
   switch($c){
    case "green":
        echo "your favoroite color is green";
        break;

    case "red":
        echo "your favoroite color is red";
        break;
    case "blue":
        echo "your favoroite color is blue";
        break;
        default:
        echo "invalid input";

   }
      echo "<br>";
   $main_option=2;
   $sub_option=1;
   switch($main_option){
  case 1:
    
            switch($sub_option){
        case 1:
         echo " Change Password";
         break;
         case 2:
            echo " Update Emai"; 
  break;
    default:
    echo "invalid choice";
    }
break;
    
  case 2:
    
     switch($sub_option){
        case 1:
        
          echo "Change Theme";
         break;
         case 2:
            echo "Adjust Brightness";
            break; 
                default:
    echo "invalid choice";

    }
    break;
    

  case 3:
    
    switch($sub_option){
        case 1:
         echo " Enable 2FA";
         break;
         case 2:
            echo "View Login History";
             break;
            default:
    echo "invalid choice";
    }
    break;
        default:
    echo "invalid choice";
   }
?>