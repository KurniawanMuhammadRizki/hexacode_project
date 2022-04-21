<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['level']==""){
  header("location:../login.php?alert=belum_login");
}

?>
<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Hexacode
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <!-- <a href="#" class="simple-text logo-mini">
          Hexacode
        </a> -->
        <a href="#" class="simple-text logo-normal">
          Dashboard Admin
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="./dataInstruktur">
              <i class="now-ui-icons design_app"></i>
              <p>Data Instruktur / Asisten </p>
            </a>
          </li>
          <li>
            <a href="./dataDiklat">
              <i class="now-ui-icons education_atom"></i>
              <p>Data Diklat</p>
            </a>
          </li>
          <li>
            <a href="./dataKegiatan">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Data Kegiatan Diklat</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <form action="" method="POST">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
        </form>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profil</a>
                  <a class="dropdown-item" href="../controller/logout.php">Log Out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <!-- <canvas id="bigDashboardChart"></canvas> -->
      </div>
      <br><br><br>
      <div class="content">

        <div class="row">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title text-center text-primary "> Data Instruktur dan Asisten</h4>
              </div>
              <div class="card-body">
                <a class="btn btn-primary btn-xs" href="../controller/tambahInstruktur.php"><i class="mr-1 fa fa-input"></i>Tambah Data</a>
                <div class="table-responsive">
                  <table class="table table-hover datatab">
                    <thead class=" text-primary">
                      <th>
                        No.
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Nomor Handphone
                      </th>
                      <th>
                        Jabatan
                      </th>
                      <th>
                        Diklat
                      </th>
                      <th>
                        No_ktp
                      </th>
                      <th>
                        No_npwp
                      </th>
                      <th>
                        Alamat
                      </th>
                      <th>
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                      <?php
        include('../config/config.php');
        $query = mysqli_query($koneksi, "SELECT * FROM instruktur ORDER BY nama DESC") or die(mysqli_error($koneksi)); if (mysqli_num_rows($query) == 0) {echo '<tr><td colspan="6">Tidak ada data!</td></tr>';} 
        else {
          $no = 1;
          while ($data = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $data['nama'] . '</td>';
            echo '<td>' . $data['email'] . '</td>';
            echo '<td>' . $data['telp'] . '</td>';
            echo '<td>' . $data['jabatan'] . '</td>';
            echo '<td>' . $data['diklat'] . '</td>';
            echo '<td>' . $data['no_ktp'] . '</td>';
            echo '<td>' . $data['no_npwp'] . '</td>';
            echo '<td>' . $data['alamat'] . '</td>';
            echo '<td><a class="btn btn-warning btn-xs" href="../controller/editInstruktur.php?id_instruktur=' . $data['id_instruktur'] . '"><i class="mr-1 fa fa-edit"></i>Edit</a> / <a class="btn btn-danger btn-xs" href="../controller/hapusInstruktur.php?id_instruktur=' . $data['id_instruktur'] . '" onclick="return confirm(\'Yakin?\')"><i class="mr-1 fa fa-trash"></i>Hapus</a></td>';
            echo '</tr>';
            $no++;
          }
        }   ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>
</body>

</html>