<?php
include "css.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}

?>
<?php
include "koneksi.php";
$qry_get_dosen=mysqli_query($koneksi,"select * from tb_dosen where id_dosen = '".$_GET['id_dosen']."'");
$data_dosen=mysqli_fetch_array($qry_get_dosen);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h3>Ubah Mahasiswa</h3>
		<form action="proses_edit_dosen.php" method="post">
			<input type="hidden" name="id_dosen" value="<?=$data_dosen['id_dosen']?>">
			Nama Dosen :
			<input type="text" name="nama_dosen" value="<?=$data_dosen['nama_dosen']?>" class="form-control">
            Alamat :
			<input type="text" name="alamat" value="<?=$data_dosen['alamat']?>" class="form-control">
            Telepon :
			<input type="text" name="telepon" value="<?=$data_dosen['telepon']?>" class="form-control">
			<input type="submit" name="simpan" value="Ubah Dosen" class="btn btn-primary">
		</form>


<a href="logout.php" class="btn btn-danger">Log Out</a>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>