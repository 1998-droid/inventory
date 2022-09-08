<?php
include "../koneksi.php";
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_data  where id_data ='$id'");

$data = mysqli_fetch_array($pilih);

$foto = $data['file'];

unlink("file/".$foto);

$query = mysqli_query($koneksi,"DELETE FROM tb_data WHERE id_data ='$id' ");
header('location:../ep/data.php?pesan=hapus-berhasil');
?>