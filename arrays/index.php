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

          for ($row=0; $row <count($multi) ; $row++) { 
            for ($col=0; $col < count($multi[$row]);$col++) { 
                echo $multi[$row][$col];
                echo " ";
            }
            
    echo "<br>";
            };
/*Each row: $multi[0], $multi[1], $multi[2]
Each column: $multi[i][0], $multi[i][1], $multi[i][2]*/
   echo "<br>";
   $empl=[
    [1,"ali","manager",30000],
    [2,"zeeshan","owner",200000],
   [3,"hassan","operator",40000]
   ];
   /*echo "<pre>";
   print_r($empl);
   echo "</pre>";*/   //make more readable  strucure of array

     //printing  values in complete table form 


     echo "<table border='1' cellpadding='10' cellspacing='1' style=text-align:center;>";
     echo " <th>imp id </th>
     <th>imp name</th>
    <th>imp profession</th>
    <th>imp salary</th> ";
            foreach($empl as $row){  // will copy all value in otuer row
              echo "<tr>";

              foreach($row as $col){  // will copy iner value of  row 
                echo "<td>$col</td>";
              }
                      echo "<tr>";
            }
            echo "</table>";
              echo "<br>";
   //makes that structure using for loop 
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
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
   echo "<br>";
//multidimensional associative array
$student=[
 "zeeshan" =>["computer"=>90,"math"=>80,"physics"=>70],
 "ali" =>["computer"=>90,"math"=>80,"physics"=>70],
 "hassaan" =>["computer"=>90,"math"=>80,"physics"=>70],
];
/*echo "<pre>";
   print_r($student);
   echo "</pre>";*/
     echo "<table border='1' cellpadding='10' cellspacing='1' style=text-align:center;>";
          echo " <th>student id </th>
     <th>physics </th>
    <th>math</th>
    <th>chemistry</th> ";
   foreach($student as $outer=>$key){
    echo "<tr>
    <td>$outer</td>";
         foreach($key as $inner){
   echo "<td>$inner</td>";
   echo " ";
       }
       echo "</tr>";
  

   }
   echo "</table>";
?>