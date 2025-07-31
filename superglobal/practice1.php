<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
echo $_GET['fname'].'  ';
echo $_GET['email'].'<br> '; 
}
if($_SERVER['REQUEST_METHOD']=="POST"){
echo $_POST['email'].'  ';
echo $_POST['pass'].'<br>';

}
if($_SERVER['REQUEST_METHOD']=="POST"){
echo $_POST['com'].'<br>'; 
}

?>
<?php

echo $_SERVER['SERVER_NAME'].' ';
echo $_SERVER['HTTP_HOST'].' ';
echo $_SERVER['REMOTE_ADDR'].' ';//ip address
echo $_SERVER['REQUEST_METHOD'].'<br> ';
 $GLOBALS['var']=20;
function coun(){
 $GLOBALS['var']++;
echo "total count".$GLOBALS['var'];
}
coun();

?>

