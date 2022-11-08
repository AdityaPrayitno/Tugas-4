<?php
if($_POST){
	$nama=$_POST['nama_jurusan'];
	
	if(empty($nama)){echo "<script>alert('Nama Jurusan tidak boleh kosong');location.href='tambah_Jurusan.php';</script>";}
	else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into tb_jurusan (nama_jurusan) value ('".$nama."')")
		or die(mysqli_error($koneksi));
		if($insert){echo "<script>alert('Sukses menambahkan data Jurusan');location.href='datajurusan.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan Jurusan');location.href='tambah_jurusan.php';</script>";}
		}
	}	
?>