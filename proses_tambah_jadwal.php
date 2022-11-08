<?php
if($_POST){
	$hari=$_POST['hari'];
	$jam=$_POST['jam'];
	$matkul=$_POST['id_matkul'];
	
	if(empty($hari)){echo "<script>alert('Hari tidak boleh kosong');location.href='tambah_jadwal_matkul.php';</script>";}
	else if(empty($jam)){echo "<script>alert('Jam tidak boleh kosong');location.href='tambah_jadwal_matkul.php';</script>";}	
	else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into tb_jadwal_matkul (hari,jam,id_matkul) value ('".$hari."','".$jam."','".$matkul."')")
		or die(mysqli_error($koneksi));
		if($insert){echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datajadwalmatkul.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan mahasiswa');location.href='tambah_jadwal_matkul.php';</script>";}
		}
	}	
?>