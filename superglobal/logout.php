<?php
setcookie('remember', '', time() - 3600, '/'); // Expire the cookie
header("Location: index1.php");
exit;
?>