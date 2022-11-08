<?php
include "css.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}

?>
<?php
include "koneksi.php";
$qry_get_matkul=mysqli_query($koneksi,"select * from tb_matkul where id_matkul = '".$_GET['id_matkul']."'");
$data_matkul=mysqli_fetch_array($qry_get_matkul);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h3>Ubah Mata Kuliah</h3>
		<form action="proses_edit_matkul.php" method="post">
			<input type="hidden" name="id_matkul" value="<?=$data_matkul['id_matkul']?>">
			Nama Mata Kuliah :
			<input type="text" name="nama_matkul" value="<?=$data_matkul['nama_matkul']?>" class="form-control">
			<input type="submit" name="simpan" value="Ubah Matkul" class="btn btn-primary">
		</form>



<a href="logout.php" class="btn btn-danger">Log Out</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>