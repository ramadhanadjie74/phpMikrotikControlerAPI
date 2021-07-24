<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN DOSEN</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['profile']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Pegawai</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['profile']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

</body>
</html>