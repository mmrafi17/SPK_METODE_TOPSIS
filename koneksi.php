<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_spk_su";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum Konek";
} else {
  //echo "Sudah Konek";
}
 ?>
