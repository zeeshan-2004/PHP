<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "Unauthorized access!";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php session_start(); ?>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <p>This is the login page.</p>
</body>
</html>
<?php