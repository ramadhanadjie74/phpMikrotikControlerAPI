<?php
include "koneksi.php"
?>
<html>
<head>
 <title>Simpan Data</title>
</head>
<body>
<h1>Data User</h1>
<?php
$nama = $_POST['nama'];
$nim  = $_POST['nim'];
$password = $_POST['password'];
$profile = $_POST['profile']
?>
<?php
$q_simpan = "insert into daftar_user values('','$nama','$nim','$password','$profile')";
$hasil = mysqli_query($koneksi,$q_simpan);

if($hasil){
echo "Data tersimpan: <br>";
echo "NAMA          : ".$nama."<br>";
echo "NIM           : ".$nim."<br>"; 
echo "PROFILE		: ".$profile."<br>";
}else{
echo "Data gagal disimpan";}
?>
<?php
use PEAR2\Net\RouterOS;

require_once 'PEAR2_Net_RouterOS-1.0.0b5.phar';

$util = new RouterOS\Util($client = new RouterOS\Client('192.168.77.1', 'admin', ''));

//To add a user with "profile1" limitations
$util->setMenu('/ip hotspot user')->add(
    array(
        'name' => $nim,
        'password' => $password,
        'profile' => $profile,
	'server' => 'teknikKomputer'
    )
);
?>
<form method=post action=halaman_admin.php>
<input type=submit value=Kembali>
</form>
</body>
</html>
