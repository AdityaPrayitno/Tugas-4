<?php
include "css.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}

?>
<?php
include "koneksi.php";
$qry_get_jurusan=mysqli_query($koneksi,"select * from tb_jurusan where id_jurusan = '".$_GET['id_jurusan']."'");
$data_jurusan=mysqli_fetch_array($qry_get_jurusan);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h3>Ubah Jurusan</h3>
		<form action="proses_edit_jurusan.php" method="post">
			<input type="hidden" name="id_jurusan" value="<?=$data_jurusan['id_jurusan']?>">
			Nama Jurusan :
			<input type="text" name="nama_jurusan" value="<?=$data_jurusan['nama_jurusan']?>" class="form-control">
			<input type="submit" name="simpan" value="Ubah Jurusan" class="btn btn-primary">
		</form>


<a href="logout.php" class="btn btn-danger">Log Out</a>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>