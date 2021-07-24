<html>
<head>
 <title>CARI USER</title>
</head>
<body>
<h1>Masukkan NIM USER</h1>
 <table>
<tr>
<td>NAMA</td>
   <td><input type=text name=nama size=20></td>
</tr>
<tr>
<td>NIM</td>
   <td><input type=text name=nim size=20></td>
  </tr>
<tr>
<td>PASSWORD</td>
   <td><input type=password name=password size=20></td>
</tr>
<tr>
<td>Profile</td>
   <td><input type=text name=profile size=20></td>
</tr>
<tr>
   <td align=center><input type=submit name=save value=save></td>
   <td align=center><input type=reset name=reset value=batal></td>
</tr>
<?php
include 'koneksi.php';
if(isset($_POST['gedit'])){
	$profile	= $_POST['profile'];
	$nama	= $_POST['nama'];
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	
	
	$sql	= 'update daftar_user set nama="'.$nama.'", nim="'.$nim.'", password="'.$password.'" where profile="'.$profile.'"';
	$query	= mysqli_query($sql,$sambung);
	
	if($query){
	header('halaman_admin.php');
	}
	else{ 
	echo"Gagal";
	}
  } 
?>
<br>
	<br>
	<form method=post action=halaman_admin.php>
	<input type=submit name=submit value=Kembali>
	</form>

</body>
</html>