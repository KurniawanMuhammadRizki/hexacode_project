<?php 
if(isset($_GET['id_diklat'])){ 
  include('../config/config.php'); 

  $id_diklat = $_GET['id_diklat']; 
 
  $cek = mysqli_query($koneksi, "SELECT id_diklat FROM diklat WHERE id_diklat='$id_diklat'") or die(mysql_error()); 
 
  if(mysqli_num_rows($cek) == 0){ 
 
    echo '<script>window.history.back()</script>'; 
 
 }else{ 
 
  $del = mysqli_query($koneksi, "DELETE FROM diklat WHERE id_diklat='$id_diklat'"); 

  if($del){ 
 
   echo 'Data siswa berhasil di hapus! ';  
   header('Location: ../admin/dataDiklat.php');

  }else{ 
 
   echo 'Gagal menghapus data! '; 
   header('Location: ../admin/dataDiklat.php'); 
 
  } 
 
 } 
 
}else{ 
 
  echo '<script>window.history.back()</script>'; 
 
} ?> 
  