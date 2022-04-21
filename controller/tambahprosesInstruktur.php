<?php
if (isset($_POST['kirim'])) {

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

    $input = mysqli_query($koneksi, "INSERT INTO instruktur VALUES(NULL, '$nama','$email', '$telp', '$jabatan', '$diklat', '$no_ktp', '$no_npwp', '$alamat')") or die(mysqli_error($koneksi));
    $message = "Data telah ditambahkan.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: ../admin/dataInstruktur.php');
}
?>


