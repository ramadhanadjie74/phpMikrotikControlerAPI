<?php
include "koneksi.php"
?>
<html>
<head>
</head>
<body>
<h1>HAPUS USER</h1>
<?php
$nim  = $_POST['nim'];
?>
<?php
$q_cari = "select * from daftar_user where nim like '$nim'";
$hasil = mysqli_query($koneksi,$q_cari);
$jumlah=mysqlI_num_rows($hasil);
 echo "<br>";
 echo "Ditemukan: $jumlah";
 echo "<br>";
 while($baris=mysqlI_fetch_array($hasil))
   {
   echo "<br>";
   echo "id : ";
   echo $baris[0];
   echo "<br>";
   echo "Nama : ";
   echo $baris[1];
   echo "<br>";
   echo "NIM : ";
   echo $baris[2];
   echo "<br>";
   echo "PROFILE : ";
   echo $baris[4];
}
?>
<form method=post action=halaman_admin.php>
<a href="halaman_admin.php"><input type="button" value="Hapus dan Kembali">
<?php
$sql=mysqli_query($koneksi,"Delete FROM daftar_user WHERE nim='$nim'")or die(mysqli_error());
$alter=mysqli_query($koneksi,"ALTER TABLE daftar_user DROP id")or die(mysqli_error());
$updateAI=mysqli_query($koneksi,"ALTER TABLE daftar_user ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST")or die(mysqli_error());
header("halaman_admin?pesan=delete");
?>
</a>
<?php
use PEAR2\Net\RouterOS;

require_once 'PEAR2_Net_RouterOS-1.0.0b5.phar';

$util = new RouterOS\Util($client = new RouterOS\Client('192.168.77.1', 'admin', ''));

//To add a user with "profile1" limitations
$util->setMenu('/ip hotspot user')->remove(RouterOS\Query::where('name', $nim));
?>
</form>
</body>
</html>