<?php
include "koneksi.php";
include "css.php";
$id_jurusan=$_GET['id_jurusan'];
mysqli_query($koneksi,"delete from tb_jurusan where id_jurusan='$id_jurusan'") or die (mysqli_error());
if($id_jurusan){echo "<script>alert('Hapus Data Sukses');location.href='datajurusan.php';</script>";}
		else{echo "<script>alert('Gagal Menghapus Data');location.href='tambah_jurusan.php';</script>";}

?>