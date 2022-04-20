// LOGIN

<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = ($_POST['password']);
 
$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);

if($cek > 0){
    $data = mysqli_fetch_assoc($sql);

    if($data['level']=="admin"){
        $_SESSION['username'] =  $data['username'];
        $_SESSION['level'] = "admin";
        header("location:admin.php");

    }else if($data['level']=="instruktur"){
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = "instruktur";
        header("location:instruktur.php");

    }else{
        header("location:login.php?alert=gagal");
    }   
}else{
    header("location:login.php?alert=gagal");
}
?>