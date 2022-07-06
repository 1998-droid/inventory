<?php 
include '../koneksi.php';

//pengecekan tipe harus pdf
$tipe_file = $_FILES['file']['type']; //mendapatkan mime type
if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
{
 $nama     = trim($_POST['nama']);
 $nomor    = trim($_POST['nomor']);
 $file 	= trim($_FILES['file']['name']);

 $sql = "INSERT INTO tb_data1 (nama, nomor) VALUES ('$nama', '$nomor')";
 mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id

 //dapatkan id terkahir
 $query = mysqli_query($koneksi,"SELECT id_data1 FROM tb_data1 ORDER BY id_data1 DESC LIMIT 1");
 $data  = mysqli_fetch_array($query);

 //mengganti nama pdf
 $nama_baru = "file_".$data['id_data1'].".pdf"; //hasil contoh: file_1.pdf
 $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
 $folder    = "file"; //folder tujuan

 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
 //update nama file di database
 mysqli_query($koneksi,"UPDATE tb_data1 SET file='$nama_baru' WHERE id_data1='$data[id_data1]' ");

 header('location:data.php?alert=upload-berhasil');

} else
{
 echo "Gagal Upload File Bukan PDF! <a href='data.php'> Kembali </a>";
}
?>