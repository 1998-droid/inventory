<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['user'];
$password = $_POST['pass'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE user='$username' and pass='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
        $_SESSION['nama']    = $data['nama'];
		// alihkan ke halaman dashboard admin
		header("location:../kepeg");
 
	// cek jika user login sebagai pegawai
	}else if($data['role']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $data['user'];
		$_SESSION['role'] = "pegawai";
		$_SESSION['nama']    = $data['nama'];
		$_SESSION['kategori']    = $data['kategori'];
		// alihkan ke halaman dashboard pegawai
		header("location:../kepeg");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:log.php?pesan=gagal");
	}	
}else{
	header("location:log.php?pesan=gagal");
}
 
?>