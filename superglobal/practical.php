<?php
// $-post
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $email=$_POST['email'];
 $pass=$_POST['pass'];

 echo "your email is  $email "; 
  echo "<br>";
  echo " your password is $pass";
 

}
session_start(); // Start the session at the top
$nm="ahsan@gmail.com";
$pss="password124@";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if($_POST['email']==$nm &&  $_POST['pass']==$pss ){
        echo "you are logged in";
    }
    else{
        echo "invalid email and password";
    }

 
}

// $_get

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    echo "You entered: " . htmlspecialchars($_GET['name']);
};

 if($_SERVER["REQUEST_METHOD"]=="GET"){
 $a=$_GET['num1'];
 $b=$_GET['num2'];
 $c=$a+$b;
    echo "you sum is" .$c;

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h3>post form</h3>
    <div class="container">
<form action="/zeeshan/get-post/practical.php" method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" onpaste="return false;" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="pass" onpaste="return false;">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <h3>get form</h3>
    <div class="container">
<form action="/zeeshan/get-post/practical.php" method="get">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" onpaste="return false;" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Your Name</label>
    <input type="text" name="name" class="form-control" id="name" onpaste="return false;" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="pass" onpaste="return false;">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<h4>for sum of two integer</h4>
<form action="/zeeshan/get-post/practical.php" method="get" >
   <label for="num1">
<input type="text" name="num1">
 <label for="num2">
    <input type="text"  name="num2">
     <button type="submit" class="btn btn-primary">Submit</button>
      
   </form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>