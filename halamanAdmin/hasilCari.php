<?php
include "koneksi.php"
?>
<html>
<head>
 <title>Hasil Cari</title>
</head>
<body>
<h1>Data User</h1>
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
<input type=submit value=Kembali>
</form>
</body>
</html>
