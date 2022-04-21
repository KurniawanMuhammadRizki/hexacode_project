<?php 
if(isset($_POST['simpan'])){ 
include('../config/config.php'); 
$id_kegiatan   = $_POST['id_kegiatan'];
$diklat  = $_POST['diklat']; 
$kegiatan  = $_POST['kegiatan'];
$tgl_diklat  = $_POST['tgl_diklat']; 

$update = mysqli_query($koneksi, "UPDATE kegiatan SET diklat='$diklat', kegiatan='$kegiatan', tgl_diklat='$tgl_diklat' WHERE id_kegiatan='$id_kegiatan'") or die(mysqli_error($koneksi)); 

if($update){ 
  echo 'Data berhasil di simpan! '; 
  header('Location: ../asisten/dataKegiatan.php');
}else{ 
  echo 'Gagal menyimpan data! ';  
  header('Location: ../asisten/dataKegiatan.php');
} 
}else{ 
  echo '<script>window.history.back()</script>'; 
} ?>