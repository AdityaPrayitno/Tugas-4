<?php
include "css.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
		<h3>Tambah Data Jurusan</h3>
		<form action="proses_tambah_jurusan.php" method="post">
			Nama Jurusan :
			<input type="text" name="nama_jurusan" value="" class="form-control">
			<input type="submit" name="simpan" value="Tambah Jurusan" class="btn btn-primary">
		</form>
<a href="logout.php" class="btn btn-danger">Log Out</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>