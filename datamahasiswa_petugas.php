<?php
include "css.php";
include "navbar_petugas.php";

session_start();
  	if ($_SESSION['level']==""){header("location:index.php");}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
	<h3>Data Mahasiswa</h3>
	<table class="table table-hover table-striped">
		<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>JURUSAN</th>
		</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$qry_mahasiswa=mysqli_query($koneksi, "select * from tb_mahasiswa join tb_jurusan on tb_jurusan.id_jurusan = tb_mahasiswa.id_jurusan");
				$no=0;
				while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
				$no++; ?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_mahasiswa['nama']?></td>
					<td><?=$data_mahasiswa['nim']?></td>					
					<td><?=$data_mahasiswa['nama_jurusan']?></td>					
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
     <a href="logout.php" class="btn btn-danger">Log Out</a><br>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



