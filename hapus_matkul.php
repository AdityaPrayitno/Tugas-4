<?php
include "koneksi.php";
include "css.php";
$id_matkul=$_GET['id_matkul'];
mysqli_query($koneksi,"delete from tb_matkul where id_matkul='$id_matkul'") or die (mysqli_error());
if($id_matkul){echo "<script>alert('Hapus Data Sukses');location.href='datamatkul.php';</script>";}
		else{echo "<script>alert('Gagal Menghapus Data');location.href='tambah_matkul.php';</script>";}

?>