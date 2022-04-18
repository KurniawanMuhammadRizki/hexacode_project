<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['level']==""){
	header("location:login.php?alert=belum_login");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>instruktur</title>
</head>
<body>
	<h1>Halaman instruktur</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?><br></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">logout</a>
</body>
</html>