<?php
if (isset($_POST['kirim'])) {

    include('../config/config.php');

    $nama_diklat  = $_POST['nama_diklat'];
    $kegiatan = $_POST['kegiatan'];
    $tgl_diklat  = $_POST['tgl_diklat'];

    $input = mysqli_query($koneksi, "INSERT INTO kegiatan VALUES(NULL, '$nama_diklat','$kegiatan', '$tgl_diklat')") or die(mysqli_error($koneksi));
    $message = "Data telah ditambahkan.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: ../asisten/dataKegiatan.php');
}
?>


