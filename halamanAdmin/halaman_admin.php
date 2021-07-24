<html>
<head>
	<title>HALAMAN ADMIN</title>
</head>
<body align="center">
	<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['profile']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['profile']; ?></b>.</p>

	<h4 align="center"> <a>Klik disini untuk</a> <a href="logout.php">LOGOUT</a></h4>

	<br/>
	<br/>
<!-- awal tabel menampilkan mahasiswa -->
	<table align='left'>
	<tr>
	<th>ID</th>
	<th>NAMA</th>
	<th>NIM</th>
	<th>PROFILE</th>
	</tr>

	<?php
	include 'koneksi.php';
	$count = 1;
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM daftar_user where profile='mahasiswa' ORDER BY id ASC")or die(mysqli_error());
	while($data = mysqlI_fetch_array($query_mysql))
	{
	?>
	<tr>
		<td><?php echo $count++;?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['nim'];?></td>
		<td><?php echo $data['profile'];?></td>
	</tr>
	<?php } 
	?>
	</table>
	<!-- akhir tabel menampilkan mahasiswa -->
	<!--  -->
	<!--  -->
	<!-- awal tabel menampilkan dosen -->
	<table align='right'>
	<tr>
	<th>ID</th>
	<th>NAMA</th>
	<th>NIM</th>
	<th>PROFILE</th>
	</tr>
	<?php
	$count = 1;
	include 'koneksi.php';
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM daftar_user where profile='dosen' ORDER BY id ASC")or die(mysqli_error());
	while($data = mysqlI_fetch_array($query_mysql))
	{
	?>
	<tr>
		<td><?php echo $count++;?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['nim'];?></td>
		<td><?php echo $data['profile'];?></td>
	</tr>
	<?php } ?>
	</table>
	<!-- akhir tabel menampilkan dosen -->
	<!--  -->
	<!--  -->
	<!-- tombol menambah, mencari, dan menghapus user -->
	<a href="tambahUser.php">
	<input type="button" value="BUAT USER!">
	</a>
	<a href="cariUser.php">
	<input type="button" value="CARI USER!">
	</a>
	<a href="delete.php">
	<input type="button" value="HAPUS USER!">
	</a>
	<!-- akhir dari tombol -->
</body>
</html>