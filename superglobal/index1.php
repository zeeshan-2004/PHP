<?php
// print_r($_GET);
// echo $_GET['fname'];
// echo "<br>";
// print_r($_POST);
// echo $_POST['fname'];
// print_r($_REQUEST);
// echo $_REQUEST['fname'];
// echo "<br>";
// print_r($_SERVER);
// echo $_SERVER['PHP_SELF'].'  ';
// echo $_SERVER['HTTP_HOST'];
// echo 'cokkie is :'.$_COOKIE['user'];
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['favcolor'])){
        echo 'session color is :'.$_SESSION['favcolor'];
    }  ?>
</body>
</html>