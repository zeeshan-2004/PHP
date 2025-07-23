<?php
$filename = "report.final.version.pdf";
echo strrpos($filename,'.').'<br>';
for($i=0;$i<strlen($filename);$i++){
  $char = strtolower($filename[$i]);
    if($char=='a' ||$char=='e'|| $char=='i'||$char=='o'||$char=='u'){
     echo "$char is found at $i"; 
  break;
    }
}
echo "<br>";
$text = "PHP is great. Learning php helps build apps. PHP!";
echo stripos($text,'php').'<br>';

?>