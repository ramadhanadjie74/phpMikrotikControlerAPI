<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from daftar_user where nim='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['profile']=="mahasiswa"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['profile'] = "mahasiswa";
		// alihkan ke halaman dashboard admin
		header("location:halaman_mahasiswa.php");

	// cek jika user login sebagai pegawai
	}else if($data['profile']=="dosen"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['profile'] = "dosen";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_dosen.php");

	// cek jika user login sebagai pengurus
	}else if($data['profile']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['profile'] = "admin";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_admin.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>