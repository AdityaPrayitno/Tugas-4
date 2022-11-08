<?php
include "koneksi.php";
include "css.php";
$id_jadwal=$_GET['id_jadwal'];
mysqli_query($koneksi,"delete from tb_jadwal_matkul where id_jadwal='$id_jadwal'") or die (mysqli_error());
if($id_jadwal){echo "<script>alert('Hapus Data Sukses');location.href='datajadwalmatkul.php';</script>";}
		else{echo "<script>alert('Gagal Menghapus Data');location.href='tambah_jadwal_matkul.php';</script>";}

?>