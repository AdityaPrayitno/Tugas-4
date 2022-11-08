<?php
if($_POST){
	$id_matkul=$_POST['id_matkul'];
	$nama=$_POST['nama_matkul'];
	
	if(empty($nama)){echo "<script>alert('Nama Mata Kuliah tidak boleh kosong');location.href='datamatkul.php';</script>";}
	else {
		include "koneksi.php";
		$update=mysqli_query($koneksi, "update tb_matkul set nama_matkul='".$nama."' where id_matkul = '".$id_matkul."' ")
		or die(mysqli_error($koneksi));
		if($update){echo "<script>alert('Sukses merubah data Mata Kuliah');location.href='datamatkul.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan Mata Kuliah');location.href='datamatkul.php';</script>";}
		}
	}	
?>