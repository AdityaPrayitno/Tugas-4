<?php
include "css.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}

?>
<?php
include "koneksi.php";
$qry_get_jadwal=mysqli_query($koneksi,"select * from tb_jadwal_matkul where id_jadwal = '".$_GET['id_jadwal']."'");
$data_jadwal=mysqli_fetch_array($qry_get_jadwal);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h3>Ubah Jadwal Mata Kuliah</h3>
		<form action="proses_edit_jadwal.php" method="post">
			<input type="hidden" name="id_jadwal" value="<?=$data_jadwal['id_jadwal']?>">
			Hari :
			<input type="text" name="hari" value="<?=$data_jadwal['hari']?>" class="form-control">
			Jam :
			<input type="text" name="jam" value="<?=$data_jadwal['jam']?>" class="form-control">
            Mata Kuliah :
			<select name="id_matkul" value="<?=$data_jadwal['id_matkul']?>" class="form-control">
				<option></option>
				<?php
				include "koneksi.php";
				$qry_matkul=mysqli_query($koneksi, "select * from tb_matkul");
				while ($data_matkul=mysqli_fetch_array($qry_matkul)) {
					echo '<option value="'.$data_matkul['id_matkul'].'">'.$data_matkul['nama_matkul'].'</option>';
				}
				?>
			</select>
			<input type="submit" name="simpan" value="Ubah Jadwal" class="btn btn-primary">
		</form>



<a href="logout.php" class="btn btn-danger">Log Out</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>