<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from tb_user where user='$username' and pass='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['hak_akses']=="kepeg"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "kepeg";
        $_SESSION['nama']    = $data['nama'];
		// alihkan ke halaman dashboard admin
		header("location:../kepeg");
 
	// cek jika user login sebagai pegawai
	}else if($data['hak_akses']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_pegawai.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['hak_akses']=="pengurus"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_pengurus.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>