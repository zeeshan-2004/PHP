<?php
// phpinfo();//for all php inofrmation
$str='Tomorrow I \'ll learn PHP global variables.';
echo stripcslashes($str)."<br>";
$var = 'PHP Tutorial';
echo "<h3>$var</h3>"."<br>";
echo "<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial</p>"."<br>";
echo "Your User Agent is :" . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo basename($_SERVER['PHP_SELF']).'<br> ';//get file name
echo " root:".$_SERVER['REQUEST_URI'].'<br> ';
echo "scheme:".$_SERVER['REQUEST_SCHEME'].'<br>' ;
echo "host :".$_SERVER['HTTP_HOST']. '<br>  ';
$text = 'PHP Tutorial';
echo preg_replace('/ /','>',$text);
$url='https://www.w3schools.com/php/default.asp#gsc.tab=0';
echo $_SERVER['SERVER_PROTOCOL']."<br>";
if (!empty($_SERVER['HTTPS'])) {
  // Display a message if HTTPS is enabled
  echo 'https is enabled';
} else {
  // Display a message if HTTPS is not enabled, followed by a newline character
  echo 'http is enabled' . "\n";
}
// header('Location:http://localhost/PHP/practice-question/arr.php');
echo "<br>";
function sum($a,$b){
 if($a!=$b){
  return $a+$b;
 }
 else if($a==$b){
   return ($a+$b)*3;
 }
 else{
  echo "invalid input";
 }
}
$sum=sum(2,2);
echo $sum;
?>
