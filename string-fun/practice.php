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
echo strripos($text,'e').'<br>';
$paragraph = "The theory and the theme are based on the thesis.";
$substring = "the";
$positions = [];

$offset = 0;

while (($pos = strpos($paragraph, $substring, $offset)) !== false) {
    $positions[] = $pos;
    $offset = $pos + 1; // move past the current match
}

print_r($positions);
echo "<br>";
$hex = "4F2A9B7C33";
$res=str_split($hex,2);
print_r($res);
echo "<br>";
$res1=chunk_split($hex,4,' ');
print_r($res1);
echo "<br>";
$code = "x7y9qk";
$res2=strtoupper($code);
print_r($res2);


?>