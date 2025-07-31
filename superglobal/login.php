
$err = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    if (!empty($name)) {
        if (isset($_POST['remember'])) {
            setcookie('remember', $name, time() + (86400 * 30), '/'); // 30 days
        }
        header("Location: index1.php"); // Redirect so cookie is usable
        exit;
    } else {
        $err = "Name is required.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($err) echo "<p style='color:red;'>$err</p>"; ?>
    <form method="post" action="">
        <label>Enter your name:</label>
        <input type="text" name="name"><br><br>
        <label><input type="checkbox" name="remember"> Remember Me</label><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
