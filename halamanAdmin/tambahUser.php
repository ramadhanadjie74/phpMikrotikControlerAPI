<html>
<head>
 <title>TAMBAH USER</title>
</head>
<body>
<h1>Masukkan Data User</h1>
<form method=post action=simpan.php>
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
 </table>
    <br><a class="tombol" href="halaman_admin.php"> Menampilkan data yang sudah ada</a><br><br>
</form>
</body>
</html>
