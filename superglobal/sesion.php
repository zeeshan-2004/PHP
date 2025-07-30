<?php
session_start();
$_SESSION['favcolor']='green';//print in index1
echo 'session variable is set'.'  ';
session_unset();
session_destroy();
echo 'session has destroyed';
?>
