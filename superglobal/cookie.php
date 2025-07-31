<?php
$cokname="user";
$cokval='this is cokie';
setcookie($cokname,$cokval,time()+(86400*30),'/');//print in index1
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!isset($_COOKIE[$cokname] )){
        echo 'cokkie not set';
    }
    else{
         echo $_COOKIE[$cokname] ;

    }
    setcookie('user','',time()-(86400*30),'/');
   ?>
<?php
// Check if the user has already accepted cookies
$show_cookie_message = !isset($_COOKIE['cookie_accepted']);

// Set the cookie if the user clicked "Accept" (from JS)
if (isset($_GET['accept_cookie'])) {
    setcookie("cookie_accepted", "yes", time() + (86400 * 365), "/");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Message Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .cookie-bar {
            position: fixed;
            bottom: 0;
            width: 90%;
            background: #222;
            color: white;
            padding: 15px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.3);
        }
        .cookie-bar button {
            padding: 8px 15px;
            background: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }
        .cookie-bar button:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

<h1>Welcome to My Website</h1>
<p>This is your homepage content.</p>

<?php if ($show_cookie_message): ?>
<div class="cookie-bar" id="cookieBar">
    <span>This website uses cookies to ensure you get the best experience.</span>
    <button onclick="acceptCookie()">Accept</button>
</div>
<?php endif; ?>

<script>
function acceptCookie() {
    // Redirect with GET param to set PHP cookie
    window.location.href = "?accept_cookie=1";
}
</script>

</body>
</html>

</body>
</html>