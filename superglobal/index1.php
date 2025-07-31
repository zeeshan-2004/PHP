<?php
print_r($_GET);
echo $_GET['fname'];
echo "<br>";
print_r($_POST);
echo $_POST['fname'];
print_r($_REQUEST);
echo $_REQUEST['fname'];
echo "<br>";
print_r($_SERVER);
echo $_SERVER['PHP_SELF'].'  ';
echo $_SERVER['HTTP_HOST'];
echo 'cokkie is :'.$_COOKIE['user'];
session_start();

?>
<?php
$welcome = "Welcome!";
if (isset($_COOKIE['remember'])) {
    $welcome = "Welcome back, " . htmlspecialchars($_COOKIE['remember']) . "!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2><?php echo $welcome; ?></h2>

    <?php if (isset($_COOKIE['remember'])): ?>
        <p><a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a></p>
    <?php endif; ?>
</body>
</html>
