<?php
include "css.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}

?>
<?php
include "koneksi.php";
$qry_get_mahasiswa=mysqli_query($koneksi,"select * from tb_mahasiswa where id_mahasiswa = '".$_GET['id_mahasiswa']."'");
$data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h3>Ubah Mahasiswa</h3>
		<form action="proses_edit.php" method="post">
			<input type="hidden" name="id_mahasiswa" value="<?=$data_mahasiswa['id_mahasiswa']?>">
			Nama :
			<input type="text" name="nama" value="<?=$data_mahasiswa['nama']?>" class="form-control">
			NIM :
			<input type="text" name="nim" value="<?=$data_mahasiswa['nim']?>" class="form-control">
            Alamat :
			<input type="text" name="alamat" value="<?=$data_mahasiswa['alamat']?>" class="form-control">
            Username :
			<input type="text" name="username" value="<?=$data_mahasiswa['username']?>" class="form-control">
            Password :
			<input type="text" name="password" value="<?=$data_mahasiswa['password']?>" class="form-control">
			Jurusan :
			<select name="id_jurusan" value="<?=$data_mahasiswa['id_jurusan']?>" class="form-control">
				<option></option>
				<?php
				include "koneksi.php";
				$qry_jurusan=mysqli_query($koneksi, "select * from tb_jurusan");
				while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
					echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
				}
				?>
			</select>
			<input type="submit" name="simpan" value="Ubah Mahasiswa" class="btn btn-primary">
		</form>


<a href="logout.php" class="btn btn-danger">Log Out</a>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>