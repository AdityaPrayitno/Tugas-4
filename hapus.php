<?php
include "koneksi.php";
include "css.php";
$id_mahasiswa=$_GET['id_mahasiswa'];
mysqli_query($koneksi,"delete from tb_mahasiswa where id_mahasiswa='$id_mahasiswa'") or die (mysqli_error());
if($id_mahasiswa){echo "<script>alert('Hapus Data Sukses');location.href='datamahasiswa.php';</script>";}
		else{echo "<script>alert('Gagal Menghapus Data');location.href='tambah_mahasiswa.php';</script>";}

?>