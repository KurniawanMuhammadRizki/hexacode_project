<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Data Peserta</button>
  <form action="proses/tambah_peserta.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
            <label class="col-form-label">Nama Lengkap:</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">No. KTP:</label>
            <input type="number" name="no_ktp" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Nomor Handphone:</label>
            <input type="number" name="telp" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Tempat Lahir:</label>
            <textarea name="tempat" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label class="col-form-label">Tanggal Lahir:</label>
            <input type="date" name="tanggal" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label" for="jk">Jenis Kelamin:</label><br>
            <label class="custom-control custom-radio custom-control-inline">
              <input type="radio" name="jk" checked="" class="custom-control-input"><span class="custom-control-label">Perempuan</span>
            </label>
            <label class="custom-control custom-radio custom-control-inline">
              <input type="radio" name="jk" class="custom-control-input"><span class="custom-control-label">Laki-laki</span>
            </label>
          </div>
          <div class="mb-3">
            <label class="col-form-label">Agama:</label>
            <select name="agama" class="form-select" aria-label="Default select example">
              <option value="1">Islam</option>
              <option value="2">Kristen</option>
              <option value="3">Hindu</option>
              <option value="4">Budha</option>
              <option value="5">Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="col-form-label">Pendidikan Terakhir:</label>
            <select name="pendidikan" class="form-select" aria-label="Default select example">
              <option value="1">SMA/SMK</option>
              <option value="2">S1</option>
              <option value="3">S2</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="col-form-label">Alamat:</label>
            <textarea name="alamat" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label class="col-form-label">Provinsi:</label>
            <input type="text" name="provinsi" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Kota:</label>
            <input type="text" name="kota" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Kecamatan:</label>
            <input type="text" name="kecamatan" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Desa:</label>
            <input type="text" name="desa" class="form-control">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Status:</label>
            <select name="status" class="form-select" aria-label="Default select example">
              <option value="1">Belum Bekerja</option>
              <option value="2">Sudah Bekerja</option>
              <option value="3">Memiliki Usaha</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input class="btn btn btn-primary" type="submit" name="kirim" value="Kirim">
      </div>
    </div>
  </div>
</div>
</form>





<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>No. KTP</th>
          <th>Email</th>
          <th>Nomor Handphone</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Pendidikan</th>
          <th>Alamat</th>
          <th>Provinsi</th>
          <th>Kota</th>
          <th>Kecamatan</th>
          <th>Desa</th>
          <th>Status</th>
          <th>Opsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include('../config/koneksi.php');
        $query = mysqli_query($koneksi, "SELECT * FROM peserta ORDER BY nama DESC") or die(mysqli_error($koneksi)); if (mysqli_num_rows($query) == 0) {echo '<tr><td colspan="6">Tidak ada data!</td></tr>';} 
        else {
          $no = 1;
          while ($data = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $data['nama'] . '</td>';
            echo '<td>' . $data['email'] . '</td>';
            echo '<td>' . $data['telp'] . '</td>';
            echo '<td>' . $data['tempat'] . '</td>';
            echo '<td>' . $data['tanggal'] . '</td>';
            echo '<td>' . $data['jk'] . '</td>';
            echo '<td>' . $data['agama'] . '</td>';
            echo '<td>' . $data['pendidikan'] . '</td>';
            echo '<td>' . $data['alamat'] . '</td>';
            echo '<td>' . $data['provinsi'] . '</td>';
            echo '<td>' . $data['kota'] . '</td>';
            echo '<td>' . $data['kecamatan'] . '</td>';
            echo '<td>' . $data['desa'] . '</td>';
            echo '<td>' . $data['status'] . '</td>';
            echo '<td><a class="btn btn-warning btn-xs" href="edit.php?id=' . $data['id_peserta'] . '"><i class="mr-1 fa fa-edit"></i>Edit</a> / <a class="btn btn-danger btn-xs" href="controller/hapus.php?id=' . $data['id'] . '" onclick="return confirm(\'Yakin?\')"><i class="mr-1 fa fa-trash"></i>Hapus</a></td>';
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