<?php
$user='username';
$value='Gulnara Serik';
setcookie($user,$value,time()+(86400*1),'/');
echo $_COOKIE[$user].'<br> ';
// setcookie($user,$value,time()-(86400*1),'/');
session_start();
$_SESSION['userid']='10020';
echo "session variable is set".'  ';
echo $_SESSION['userid'].'  ';
session_unset();
session_destroy();
// echo $_SESSION['userid'].'  ';
$user1='secure';
$value1='https';
setcookie($user1,$value1,time()+(86400*1),'/','',true);//secure https
echo $_COOKIE[$user1].' ';
$user2='visited';
$value2='already';
setcookie($user2,$value2,time()+(86400*1),'/');
if(!isset($_COOKIE[$user2])){
    echo "welcome".'<br> ';
}
else{
    echo $user2.'<br> ';
}
session_start();
$_SESSION['var']=['home','about','contact','services'];
echo 'array has been stored in session <br>';
print_r($_SESSION['var']);
 session_unset();
    session_destroy();
    session_start();
$sessiontime=120;
if(isset($_SESSION['last_activity'])){
    $lastactivity=$_SESSION['last_activity'];
  $currentime=time();
  $sincelast= $currentime-$lastactivity;
  if($sincelast>$sessiontime){
    session_unset();
    session_destroy();
     echo "Session expired. Please log in again.";
     exit;
  }
   else{
    $_SESSION['last_activity']=$currentime;
    echo "session is active";

   }}
   else{
    $_SESSION['last_activity']=time();
    echo "session has started";
   }


?>