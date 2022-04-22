<?php
if (isset($_POST['kirim'])) {

    include('../config/config.php');

    $id_diklat = $_POST['id_diklat'];
    $nama_diklat  = $_POST['nama_diklat']; 
    $jum_peserta  = $_POST['jum_peserta'];
    $angkatan  = $_POST['angkatan']; 
    $status = $_POST['status'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_selesai = $_POST['tgl_selesai'];

    $input = mysqli_query($koneksi, "INSERT INTO diklat VALUES(NULL,'$nama_diklat', '$jum_peserta', '$angkatan', '$status', '$tgl_mulai', '$tgl_selesai')") or die(mysqli_error($koneksi));
    $message = "Data telah ditambahkan.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: ../admin/dataDiklat.php');
}
?>


