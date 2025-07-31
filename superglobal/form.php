

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <?php
$nameErr=$emailErr=$passErr=' ';
$name=$email=$pass='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
       $nameErr='Name is required '; 
    }
    else{
 $name=$_POST['name'];
    }
    if(empty($_POST['email'])){
       $emailErr='Email is required '; 
    }
    else{
 $email=$_POST['email'];
    }
    if(empty($_POST['pass'])){
       $passErr='password is required '; 
    }
    else{
 $pass=$_POST['pass'];
    }
}
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>"  method='post'>
    <form action="practice1.php"  method='post'>
<h2>Required feild *</h2>
<label for='name' >Enter your name</label>
    <input type='text' name='name'>
  <span class='error'>* <?php echo $nameErr;?></span><br><br>
<label for='email' >Enter your email</label>
    <input type='email' name='email'>
 <span class='error'>* <?php echo $emailErr;?></span><br><br>
<label for='pass' >Enter your password</label>
    <input type='password' name='pass'>
 <span class='error'>* <?php echo $passErr;?></span><br><br>
<button type='submit'>submit</button>
</form>
<?php
echo "<h2>Your input </h2>";
echo 'Your name is : '.$name.'<br> ';
echo 'Your email is : '.$email.'<br> ';
echo 'Your password is  :'.$pass.'<br> ';
?>
</body>
</html>
