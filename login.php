<?php
    if(isset($_GET['alert'])){
        if($_GET['alert']=="gagal"){
            echo "<p>Maaf! Username & Password Salah.</p>";
        }else if($_GET['alert']=="belum_login"){
            echo "<p>Anda Harus Login Terlebih Dulu!</p>";
        }else if($_GET['alert']=="logout"){
            echo "<p>Anda Telah Logout!</p>";
        }
    }
    ?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form action="login_proses.php" method="post" style="margin-left: 500px; margin-right: 500px;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" required="required">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" required="required">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <input class="btn btn btn-primary" type="submit" value="Login">
</form>
</body>


