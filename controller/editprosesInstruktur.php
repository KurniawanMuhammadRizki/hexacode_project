<?php 
if(isset($_POST['simpan'])){ 
include('../config/config.php'); 
$id_instruktur   = $_POST['id_instruktur'];
$nama  = $_POST['nama']; 
$email  = $_POST['email'];
$telp  = $_POST['telp']; 
$jabatan = $_POST['jabatan'];
$diklat = $_POST['diklat'];
$no_ktp = $_POST['no_ktp'];
$no_npwp = $_POST['no_npwp'];
$alamat = $_POST['alamat'];

$update = mysqli_query($koneksi, "UPDATE instruktur SET nama='$nama', email='$email', telp='$telp', jabatan='$jabatan', diklat='$diklat', no_ktp='$no_ktp', no_npwp='$no_npwp', alamat='$alamat' WHERE id_instruktur='$id_instruktur'") or die(mysqli_error($koneksi)); 

if($update){ 
  echo 'Data berhasil di simpan! '; 
  header('Location: ../admin/dataInstruktur.php');
}else{ 
  echo 'Gagal menyimpan data! ';  
  header('Location: ../admin/dataInstruktur.php');
} 
}else{ 
  echo '<script>window.history.back()</script>'; 
} ?>