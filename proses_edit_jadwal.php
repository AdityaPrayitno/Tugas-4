<?php
if($_POST){
	$id_jadwal=$_POST['id_jadwal'];
	$hari=$_POST['hari'];
	$jam=$_POST['jam'];
	$matkul=$_POST['id_matkul'];
	
	if(empty($hari)){echo "<script>alert('Hari tidak boleh kosong');location.href='datajadwalmatkul.php';</script>";}
	else if(empty($jam)){echo "<script>alert('Jam tidak boleh kosong');location.href='datajadwalmatkul.php';</script>";}
	else {
		include "koneksi.php";
		$update=mysqli_query($koneksi, "update tb_jadwal_matkul set hari='".$hari."',jam='".$jam."', id_matkul='".$matkul."' where id_jadwal = '".$id_jadwal."' ")
		or die(mysqli_error($koneksi));
		if($update){echo "<script>alert('Sukses merubah data Jadwal Mata Kuliah');location.href='datajadwalmatkul.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan Jadwal Mata Kuliah');location.href='datajadwalmatkul.php';</script>";}
		}
	}	
?>