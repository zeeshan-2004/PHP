<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["fname"];
    $pass=$_POST["pass"];
    echo "heloo $name ";
}
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $name=$_GET["lname"];
    $gmail=$_GET["email"];
    echo "heloo $name having $gmail";
}

session_start();
if(!isset($_SESSION["username"])){
    echo "unathorixed";
    exit;
}

echo "welcome ".$_SESSION["username"];
?>