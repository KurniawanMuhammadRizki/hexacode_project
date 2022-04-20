<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'hexacode');
if ($koneksi) { } else {
  echo 'tidak terkoneksi';
}
