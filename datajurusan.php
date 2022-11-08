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
	<h3>Data Jurusan</h3>
	<table class="table table-hover table-striped">
		<thead>
		<tr>
			<th>NO</th>
			<th>NAMA JURUSAN</th>
            <th>AKSI</th>
		</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$qry_jurusan=mysqli_query($koneksi, "select * from tb_jurusan");
				$no=0;
				while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
				$no++; ?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_jurusan['nama_jurusan']?></td>
					<td><a href="edit_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" class="btn btn-success">Edit</a>
					<a href="hapus_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" onClick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
     <a href="tambah_jurusan.php" class="btn btn-warning">Tambah Jurusan</a>
     <a href="logout.php" class="btn btn-danger">Log Out</a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



