<?php
if($_POST){
	$nama=$_POST['nama_matkul'];
	
	if(empty($nama)){echo "<script>alert('Nama Mata Kuliah tidak boleh kosong');location.href='tambah_matkul.php';</script>";}
	else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into tb_matkul (nama_matkul) value ('".$nama."')")
		or die(mysqli_error($koneksi));
		if($insert){echo "<script>alert('Sukses menambahkan data Mata Kuliah');location.href='datamatkul.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan Mata Kuliah');location.href='tambah_matkul.php';</script>";}
		}
	}	
?>