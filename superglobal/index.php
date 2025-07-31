<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
 <form action="index1.php" method="get">
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
  <form action="index1.php" method="post">
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
<!-- for same page submition using $_SERVER -->
  <form action="<?php $_SERVER['PHP_SELF'] ?> " method="post">
   <div class="mb-3">
    <label for="fname" class="form-label">Your Name</label>
    <input type="text" name="fname" class="form-control" id="text" onpaste="return false;" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" onpaste="return false;" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <button type="submit" class="btn btn-primary" name='save'>Submit</button>
</form>

<?php

if(isset($_POST['save'])){
  echo "<br>";
  echo $_POST['fname'].'  ';
  echo $_POST['email'].'<br> ';
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
