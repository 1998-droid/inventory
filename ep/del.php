<?php
include "../koneksi.php";
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);
$query = mysqli_query($koneksi,"DELETE FROM tb_ep WHERE id_ep ='$id' ");
header('location:data.php?pesan=hapus-berhasil');
?>