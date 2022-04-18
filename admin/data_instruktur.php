<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Instruktur</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
if (isset($_POST['kirim'])) {

    include('koneksi.php');

    $nama_inst  = $_POST['nama_inst'];
    $ktp_inst = $_POST['ktp_inst'];
    $npwp_inst  = $_POST['npwp_inst'];
    $file_inst = $_POST['file_inst'];
    $alamat_inst = $_POST['alamat_inst'];

    $input = mysqli_query($koneksi, "INSERT INTO user VALUES(NULL, '$nama_inst','$ktp_inst', '$npwp_inst', '$file_inst')") or die(mysqli_error($koneksi));
    $message = "Terimakasih telah mendaftar :)";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>



<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Data Instruktur</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <label class="col-form-label">Nama Lengkap:</label>
            <input type="text" name="nama_inst" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">No. KTP:</label>
            <input type="text" name="ktp_inst" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">No. NPWP:</label>
            <input type="text" name="npwp_inst" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">File:</label>
            <input type="text" name="file_inst" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Alamat:</label>
            <textarea name="alamat_inst" class="form-control"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input class="btn btn btn-primary" type="submit" name="kirim" value="Kirim">
      </div>
    </div>
  </div>
</div>







<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>No. KTP</th>
          <th>No. NPWP</th>
          <th>File</th>
          <th>Alamat</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('../koneksi.php');
        $query = mysqli_query($koneksi, "SELECT * FROM data_instruktur ORDER BY nama_inst DESC") or die(mysqli_error($koneksi)); if (mysqli_num_rows($query) == 0) {echo '<tr><td colspan="6">Tidak ada data!</td></tr>';} 
        else {
          $no = 1;
          while ($data = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $data['nama_inst'] . '</td>';
            echo '<td>' . $data['ktp_inst'] . '</td>';
            echo '<td>' . $data['npwp_inst'] . '</td>';
            echo '<td>' . $data['file_inst'] . '</td>';
            echo '<td>' . $data['alamat_inst'] . '</td>';
            echo '<td><a class="btn btn-warning btn-xs" href="edit.php?id=' . $data['id_inst'] . '"><i class="mr-1 fa fa-edit"></i>Edit</a> / <a class="btn btn-danger btn-xs" href="edit.php?id=' . $data['id_inst'] . '" onclick="return confirm(\'Yakin?\')"><i class="mr-1 fa fa-trash"></i>Hapus</a></td>';
            echo '</tr>';
            $no++;
          }
        }   ?>
          
        </tbody>
      </table>
    </div>
  </div>



  <!-- Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>