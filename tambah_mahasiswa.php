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
		<h3>Tambah Data Mahasiswa</h3>
		<form action="proses_tambah_mhs.php" method="post">
			Nama :
			<input type="text" name="nama" value="" class="form-control">
			NIM :
			<input type="text" name="nim" value="" class="form-control">
            Alamat :
			<input type="text" name="alamat" value="" class="form-control">
            Username :
			<input type="text" name="username" value="" class="form-control">
            Password :
			<input type="text" name="password" value="" class="form-control">
			Jurusan :
			<select name="id_jurusan" value="" class="form-control">
				<option></option>
				<?php
				include "koneksi.php";
				$qry_jurusan=mysqli_query($koneksi, "select * from tb_jurusan");
				while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
					echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
				}
				?>
			</select>
			<input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">
		</form>
<a href="logout.php" class="btn btn-danger">Log Out</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>