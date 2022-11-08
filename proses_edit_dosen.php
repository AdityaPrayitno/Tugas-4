<?php
if($_POST){
	$id_dosen=$_POST['id_dosen'];
	$nama=$_POST['nama_dosen'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
	
	if(empty($nama)){echo "<script>alert('Nama Dosen tidak boleh kosong');location.href='datadosen.php';</script>";}
	else if(empty($alamat)){echo "<script>alert('Alamat tidak boleh kosong');location.href='datadosen.php';</script>";}
	else if(empty($telepon)){echo "<script>alert('Telepon tidak boleh kosong');location.href='datadosen.php';</script>";}	
	else {
		include "koneksi.php";
		$update=mysqli_query($koneksi, "update tb_dosen set nama_dosen='".$nama."', alamat='".$alamat."', telepon='".$telepon."' where id_dosen = '".$id_dosen."' ")
		or die(mysqli_error($koneksi));
		if($update){echo "<script>alert('Sukses merubah data Dosen');location.href='datadosen.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan Dosen');location.href='datadosen.php';</script>";}
		}
	}	
?>