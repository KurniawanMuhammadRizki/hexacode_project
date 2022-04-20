<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data Instruktur</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
  include('../../koneksi.php');
  $id_inst = $_GET['id_inst']; 
 
  $show = mysqli_query($koneksi, "SELECT * FROM data_instruktur WHERE id_inst='$id_inst'"); 
 
  if(mysqli_num_rows($show) == 0){ 
 
    echo '<script>window.history.back()</script>'; 
 
 }else{ 
 
  $data = mysqli_fetch_assoc($show); 
 }  
 ?>


  <form action="edit_proses.php" method="post" style="width: 70%; margin: 0 auto;">
    <input type="hidden" name="id_inst" value="<?php echo $id_inst; ?>">
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
      <div class="col-sm-10">
        <input type="text" name="nama_inst" class="form-control" value="<?php echo $data['nama_inst']; ?>" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">No. KTP</label>
      <div class="col-sm-10">
        <input type="text" name="ktp_inst" class="form-control" value="<?php echo $data['ktp_inst']; ?>" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">No. NPWP</label>
      <div class="col-sm-10">
        <input type="text" name="npwp_inst" class="form-control" value="<?php echo $data['npwp_inst']; ?>" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">File</label>
      <div class="col-sm-10">
        <input type="text" name="file_inst" class="form-control" value="<?php echo $data['file_inst']; ?>" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-10">
        <input type="textarea" name="alamat_inst" class="form-control" value="<?php echo $data['alamat_inst']; ?>" required>
      </div>
    </div>
    <input class="btn btn btn-primary" type="submit" name="simpan" value="Simpan">
  </form>
  </body>
  </html>


<?php 
if(isset($_GET['id_inst'])){ 
  include('../../koneksi.php'); 

  $id_inst = $_GET['id_inst']; 
 
  $cek = mysqli_query($koneksi, "SELECT id_inst FROM data_instruktur WHERE id_inst='$id_inst'") or die(mysql_error()); 
 
  if(mysqli_num_rows($cek) == 0){ 
 
    echo '<script>window.history.back()</script>'; 
 
 }else{ 
 
  $del = mysqli_query($koneksi, "DELETE FROM data_instruktur WHERE id_inst='$id_inst'"); 

  if($del){ 
 
   echo 'Data siswa berhasil di hapus! ';  
   header('Location: ../data_instruktur.php');

  }else{ 
 
   echo 'Gagal menghapus data! '; 
   header('Location: ../data_instruktur.php'); 
 
  } 
 
 } 
 
}else{ 
 
  echo '<script>window.history.back()</script>'; 
 
} ?> 
  