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
	<h3>Data Dosen</h3>
	<table class="table table-hover table-striped">
		<thead>
		<tr>
			<th>NO</th>
			<th>NAMA DOSEN</th>
            <th>ALAMAT</th>
			<th>TELEPON</th>
            <th>AKSI</th>
		</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$qry_dosen=mysqli_query($koneksi, "select * from tb_dosen");
				$no=0;
				while($data_dosen=mysqli_fetch_array($qry_dosen)){
				$no++; ?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_dosen['nama_dosen']?></td>
					<td><?=$data_dosen['alamat']?></td>
                    <td><?=$data_dosen['telepon']?></td>
					<td><a href="edit_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>" class="btn btn-success">Edit</a>
					<a href="hapus_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>" onClick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
     <a href="tambah_dosen.php" class="btn btn-warning">Tambah Dosen</a>
     <a href="logout.php" class="btn btn-danger">Log Out</a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



