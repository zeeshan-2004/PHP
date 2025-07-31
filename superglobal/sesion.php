<?php
$_SESSION['favcolor']='green';//print in greet
echo 'session variable is set'.'  ';
session_unset();
session_destroy();
echo 'session has destroyed';
echo $_REQUEST['email'].'  ';
echo $_REQUEST['pass'].'<br>';
?>
<?php
session_start();
$cor_user='zeeshan@gmail.com';
$cor_pass='password321@';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user=$_POST['email'];
    $pass=$_POST['pass'];
    if($user==$cor_user && $pass==$cor_pass){
   $_SESSION['username']=$user;
      header("Location: greet.php");
      exit;
    }
    else{
        $err='invalid username and password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ; ?>"  method='post'>
<h2>session</h2>
    <?php if (isset($err)) echo "<p style='color:red;'>$err</p>"; ?>
<label for='name' >Enter your name</label>
    <input type='text' name='name'><br><br>
<label for='email' >Enter your email</label>
    <input type='email' name='email'><br><br>
<label for='pass' >Enter your password</label>
    <input type='password' name='pass'><br><br>
<button type='submit'>submit</button>
</form>
 

</body>
</html>
