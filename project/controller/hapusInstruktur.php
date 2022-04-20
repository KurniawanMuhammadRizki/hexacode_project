<?php 
if(isset($_GET['id_instruktur'])){ 
  include('../config/config.php'); 

  $id_instruktur = $_GET['id_instruktur']; 
 
  $cek = mysqli_query($koneksi, "SELECT id_instruktur FROM instruktur WHERE id_instruktur='$id_instruktur'") or die(mysql_error()); 
 
  if(mysqli_num_rows($cek) == 0){ 
 
    echo '<script>window.history.back()</script>'; 
 
 }else{ 
 
  $del = mysqli_query($koneksi, "DELETE FROM instruktur WHERE id_instruktur='$id_instruktur'"); 

  if($del){ 
 
   echo 'Data siswa berhasil di hapus! ';  
   header('Location: ../admin/dataInstruktur.php');

  }else{ 
 
   echo 'Gagal menghapus data! '; 
   header('Location: ../admin/dataInstruktur.php'); 
 
  } 
 
 } 
 
}else{ 
 
  echo '<script>window.history.back()</script>'; 
 
} ?> 
  