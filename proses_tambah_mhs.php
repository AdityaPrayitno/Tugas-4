<?php
if($_POST){
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$jurusan=$_POST['id_jurusan'];
	
	if(empty($nama)){echo "<script>alert('Nama mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";}
	else if(empty($nim)){echo "<script>alert('NIM tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";}
	else if(empty($alamat)){echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";}
	else if(empty($username)){echo "<script>alert('Username tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";}
	else if(empty($password)){echo "<script>alert('Password tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";}	
	else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into tb_mahasiswa (nama,nim,alamat,username,password,id_jurusan) value ('".$nama."','".$nim."','".$alamat."','".$username."','".$password."','".$jurusan."')")
		or die(mysqli_error($koneksi));
		if($insert){echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datamahasiswa.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan mahasiswa');location.href='tambah_mahasiswa.php';</script>";}
		}
	}	
?>