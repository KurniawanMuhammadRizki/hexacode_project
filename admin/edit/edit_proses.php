<?php 
if(isset($_POST['simpan'])){ 
    include('../../koneksi.php'); 
 
 $id_inst   = $_POST['id_inst'];
 $nama_inst  = $_POST['nama_inst']; 
 $ktp_inst  = $_POST['ktp_inst'];
 $npwp_inst  = $_POST['npwp_inst']; 
 $file_inst = $_POST['file_inst'];
 $alamat_inst = $_POST['alamat_inst']; 

 $update = mysqli_query($koneksi, "UPDATE data_instruktur SET nama_inst='$nama_inst', ktp_inst='$ktp_inst', npwp_inst='$npwp_inst', file_inst='$file_inst', alamat_inst='$alamat_inst' WHERE id_inst='$id_inst'") or die(mysqli_error($koneksi)); 
 
 if($update){ 
 
  echo 'Data berhasil di simpan! '; 
  header('Location: ../data_instruktur.php');
 }else{ 
 
  echo 'Gagal menyimpan data! ';  
  header('Location: ../data_instruktur.php');
 
 } 
 
}else{ 
    echo '<script>window.history.back()</script>'; 
 
} ?> _