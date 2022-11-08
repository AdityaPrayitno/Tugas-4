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
		<h3>Tambah Data Jadwal Mata Kuliah</h3>
		<form action="proses_tambah_jadwal.php" method="post">
			Hari :
			<input type="text" name="hari" value="" class="form-control">
			Jam :
			<input type="text" name="jam" value="" class="form-control">
			Nama Matkul :
			<select name="id_matkul" value="" class="form-control">
				<option></option>
				<?php
				include "koneksi.php";
				$qry_matkul=mysqli_query($koneksi, "select * from tb_matkul");
				while ($data_matkul=mysqli_fetch_array($qry_matkul)) {
					echo '<option value="'.$data_matkul['id_matkul'].'">'.$data_matkul['nama_matkul'].'</option>';
				}
				?>
			</select>
			<input type="submit" name="simpan" value="Tambah Jadwal Mata Kuliah" class="btn btn-primary">
		</form>
<a href="logout.php" class="btn btn-danger">Log Out</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>