<?php
if (isset($_POST['kirim'])) {

    include('../../koneksi.php');

    $nama  = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $email  = $_POST['email'];
    $telp = $_POST['telp'];
    $tempat = $_POST['tempat'];
    $tanggal  = $_POST['tanggal'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $pendidikan  = $_POST['pendidikan'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $kecamatan  = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $status = $_POST['status'];

    $input = mysqli_query($koneksi, "INSERT INTO peserta VALUES(NULL, '$nama','$no_ktp', '$email', '$telp', '$tempat', '$tanggal', '$jk', '$agama', '$pendidikan', '$alamat', '$provinsi', '$kota', '$kecamatan', '$desa', '$status')") or die(mysqli_error($koneksi));
    $message = "Data telah ditambahkan.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>