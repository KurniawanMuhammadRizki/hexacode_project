<?php 
if(isset($_GET['id_kegiatan'])){ 
  include('../config/config.php'); 

  $id_kegiatan = $_GET['id_kegiatan']; 
 
  $cek = mysqli_query($koneksi, "SELECT id_kegiatan FROM kegiatan WHERE id_kegiatan='$id_kegiatan'") or die(mysql_error()); 
 
  if(mysqli_num_rows($cek) == 0){ 
 
    echo '<script>window.history.back()</script>'; 
 
 }else{ 
 
  $del = mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id_kegiatan='$id_kegiatan'"); 

  if($del){ 
 
   echo 'Data siswa berhasil di hapus! ';  
   header('Location: ../instruktur/dataKegiatan.php');

  }else{ 
 
   echo 'Gagal menghapus data! '; 
   header('Location: ../instruktur/dataKegiatan.php'); 
 
  } 
 
 } 
 
}else{ 
 
  echo '<script>window.history.back()</script>'; 
 
} ?> 
  