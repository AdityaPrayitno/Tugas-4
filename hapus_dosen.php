<?php
include "koneksi.php";
include "css.php";
$id_dosen=$_GET['id_dosen'];
mysqli_query($koneksi,"delete from tb_dosen where id_dosen='$id_dosen'") or die (mysqli_error());
if($id_dosen){echo "<script>alert('Hapus Data Sukses');location.href='datadosen.php';</script>";}
		else{echo "<script>alert('Gagal Menghapus Data');location.href='tambah_dosen.php';</script>";}

?>