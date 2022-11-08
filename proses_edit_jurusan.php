<?php
if($_POST){
	$id_jurusan=$_POST['id_jurusan'];
	$nama=$_POST['nama_jurusan'];
	
	if(empty($nama)){echo "<script>alert('Nama Jurusan tidak boleh kosong');location.href='datajurusan.php';</script>";}
	else {
		include "koneksi.php";
		$update=mysqli_query($koneksi, "update tb_jurusan set nama_jurusan='".$nama."' where id_jurusan = '".$id_jurusan."' ")
		or die(mysqli_error($koneksi));
		if($update){echo "<script>alert('Sukses merubah data Jurusan');location.href='datajurusan.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan Jurusan');location.href='datajurusan.php';</script>";}
		}
	}	
?>