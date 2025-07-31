
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo 'get <br>' ?>
<form action="practice1.php" method="get">
   <div class="mb-3">
    <label for="fname" class="form-label">Your Name</label>
    <input type="text" name="fname" class="form-control" id="text" onpaste="return false;" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" onpaste="return false;" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php 
echo "<br>";
echo 'post <br>'
 ?>
<form action="practice1.php" method="post">
   <div class="mb-3">
    <label for="email" class="form-label">Your EMAIL</label>
    <input type="email" name="email" class="form-control" id="text" onpaste="return false;" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">password</label>
    <input type="password" name="pass" class="form-control" id="email" onpaste="return false;" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<form action="practice1.php" method="post">
    <lable for='com'>
        <textarea name='com' rows='10' cols='20'>enter comment</textarea>
          <button type="submit" class="btn btn-primary">Submit</button>

</body>
</html>