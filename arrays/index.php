<?php
echo "index arrays";
  echo "<br>";
 $ar=array("banana","apple","lichi");
 foreach($ar as $b){
    echo $b;
     echo "<br>";
 }
      echo "<br>";
      echo "associative array";
        echo "<br>";
      $arr=array("first"=>"red","second"=>"blue","third"=>"green",4=>"pink");
      echo $arr["first"];
       echo "<br>";
      foreach($arr as $x=>$y){
        echo "the value of $x is $y <br>";
      }
         echo "<br>";
         echo "multidimensional array <br>";
         $multi=array(
            array(1,2,3,4),
            array(5,6,7,8),
            array(9,10,11)

         );
        echo var_dump( $multi);
            echo "<br>";
            echo $multi[0][0]; //1
             echo "<br>";
            echo  $multi[2][1];
              echo "<br>";

            // printing in tabular form
            for ($i=0; $i <count($multi) ; $i++) { 
            var_dump( $multi[$i]);
              echo "<br>";

            };
            
              //printing only values in tabular form

          for ($i=0; $i <count($multi) ; $i++) { 
            for ($j=0; $j < count($multi[$i]);$j++) { 
                echo $multi[$i][$j];
                echo " ";
            }
            
    echo "<br>";
            };
/*Each row: $multi[0], $multi[1], $multi[2]
Each column: $multi[i][0], $multi[i][1], $multi[i][2]*/
   echo "<br>";
   //makes that structure using for loop easy and simple way
echo "<table border='0' cellpadding='10' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
$num = 1;
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}

echo "</table>";

?>