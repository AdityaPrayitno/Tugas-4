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
	<h3>Data Dosen</h3>
	<table class="table table-hover table-striped">
		<thead>
		<tr>
			<th>NO</th>
			<th>NAMA DOSEN</th>
            <th>ALAMAT</th>
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
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
	 <a href="logout.php" class="btn btn-danger">Log Out</a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity=					"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



