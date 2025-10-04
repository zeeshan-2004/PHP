<?php
session_start();
$_SESSION['user']="zeeshan";
echo "session has set";
$user="zeeshan";
$gmail="fareedzeeshan868@gmail.com";

if($_SERVER["REQUEST_METHOD"]=="POST"){
 if($_POST["username"]==$user && $_POST["gmail"]==$gmail){
    $_SESSION["username"]=$user;
    header("Location:index1.php");
    exit;
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label>name</label>
  <input type="text" name="username">
  <label>gmail</label>
  <input type="email" name="gmail">
  <input type="submit">

    </form>
</body>
</html>