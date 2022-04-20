<?php 
if(isset($_POST['simpan'])){ 
include('../config/config.php'); 
$id_diklat   = $_POST['id_diklat'];
$nama_diklat  = $_POST['nama_diklat']; 
$jum_peserta  = $_POST['jum_peserta'];
$angkatan  = $_POST['angkatan']; 
$status = $_POST['status'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];

$update = mysqli_query($koneksi, "UPDATE diklat SET nama_diklat='$nama_diklat', jum_peserta='$jum_peserta', angkatan='$angkatan', status='$status', tgl_mulai='$tgl_mulai', tgl_selesai='$tgl_selesai' WHERE id_diklat='$id_diklat'") or die(mysqli_error($koneksi)); 

if($update){ 
  echo 'Data berhasil di simpan! '; 
  header('Location: ../admin/dataDiklat.php');
}else{ 
  echo 'Gagal menyimpan data! ';  
  header('Location: ../admin/dataDiklat.php');
} 
}else{ 
  echo '<script>window.history.back()</script>'; 
} ?>