<?php
include "css.php";
include "navbar.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
	<h3>Data Jadwal Mata Kuliah</h3>
	<table class="table table-hover table-striped">
		<thead>
		<tr>
			<th>NO</th>
			<th>HARI</th>
			<th>JAM</th>
			<th>MATA KULIAH</th>
		</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$qry_jadwal=mysqli_query($koneksi, "select * from tb_jadwal_matkul join tb_matkul on tb_matkul.id_matkul = tb_jadwal_matkul.id_matkul");
				$no=0;
				while($data_jadwal=mysqli_fetch_array($qry_jadwal)){
				$no++; ?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_jadwal['hari']?></td>
					<td><?=$data_jadwal['jam']?></td>
					<td><?=$data_jadwal['nama_matkul']?></td>
					<td><a href="edit_jadwal.php?id_jadwal=<?=$data_jadwal['id_jadwal']?>" class="btn btn-success">Edit</a>
					<a href="hapus_jadwal.php?id_jadwal=<?=$data_jadwal['id_jadwal']?>" onClick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
     <a href="tambah_jadwal_matkul.php" class="btn btn-warning">Tambah Jadwal Mata Kuliah</a>
     <a href="logout.php" class="btn btn-danger">Log Out</a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



