<?php 
include '../koneksi.php';
if(isset($_POST['simpan'])){
        $nama     = trim($_POST['nama']);
        $nmunik    = trim($_POST['nmunik']);
        $kategori    = trim($_POST['kategori']);

        $sql = "INSERT INTO tb_ep  (epname, kategori, nmunik) VALUES ('$nama', '$kategori', '$nmunik')";
        mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id

        header('location:data.php?alert=upload-berhasil');
} 
else if(isset($_POST['edit'])){
        $nama     = trim($_POST['nama']);
        $nmunik    = trim($_POST['nmunik']);
        $kategori    = trim($_POST['kategori']);
}



//pengecekan tipe harus pdf

?>