<?php
if ($_SERVER["REQUEST_METHOD"]=='POST'){
   $name=$_POST['name'];
    $email=$_POST['email'];
    $des=$_POST["des"];
$username="root";//default
$servername="localhost";
$password="";
$database="contact form";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());

}
   echo "<br>";
 
  $sql= "INSERT INTO `tocontact` ( `name`, `email`, `description`, `time`) 
  VALUES ( '$name', '$email', '$des', current_timestamp())";
   if(mysqli_query($conn,$sql)){
     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> your data has been submitted  successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
 else{
        //  echo "records not  inserted  successfully ".mysqli_error($conn); 
             echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error!</strong> your data has not been submitted  successfully due to echnical reason.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/zeeshan/get-post/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
<form action="/zeeshan/sql/form.php" method="post">
   <div class="mb-3">
    <label for="name" class="form-label">Your Name</label>
    <input type="text" name="name" class="form-control" id="name" onpaste="return false;" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" onpaste="return false;" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="des" class="form-label">description</label>
    <textarea name="des" class="form-control" id="des" rows="5" cols="20" onpaste="return false;"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
