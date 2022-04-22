<?php
$koneksi = mysqli_connect('localhost', 'root', 'pelerr123', 'hexacode');
if ($koneksi) { } else {
  echo 'tidak terkoneksi';
}
