<?php
if($_POST){
	$id_mahasiswa=$_POST['id_mahasiswa'];
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$jurusan=$_POST['id_jurusan'];
	
	if(empty($nama)){echo "<script>alert('Nama mahasiswa tidak boleh kosong');location.href='datamahasiswa.php';</script>";}
	else if(empty($nim)){echo "<script>alert('NIM tidak boleh kosong');location.href='datamahasiswa.php';</script>";}
	else if(empty($alamat)){echo "<script>alert('Alamat tidak boleh kosong');location.href='datamahasiswa.php';</script>";}
	else if(empty($username)){echo "<script>alert('Username tidak boleh kosong');location.href='datamahasiswa.php';</script>";}
	else if(empty($password)){echo "<script>alert('Password tidak boleh kosong');location.href='datamahasiswa.php';</script>";}	
	else {
		include "koneksi.php";
		$update=mysqli_query($koneksi, "update tb_mahasiswa set nama='".$nama."',nim='".$nim."',alamat='".$alamat."', username='".$username."', password='".$password."', id_jurusan='".$jurusan."' where id_mahasiswa = '".$id_mahasiswa."' ")
		or die(mysqli_error($koneksi));
		if($update){echo "<script>alert('Sukses merubah data mahasiswa');location.href='datamahasiswa.php';</script>";}
		else{echo "<script>alert('Gagal menambahkan mahasiswa');location.href='datamahasiswa.php';</script>";}
		}
	}	
?>