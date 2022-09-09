<?php 
include '../koneksi.php';
if(isset($_POST['simpan'])){
        $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
        if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
        {
        $nama     = trim($_POST['nama']);
        $nomor    = trim($_POST['nomor']);
        $nmunik    = trim($_POST['nmunik']);
        $kategori    = $_POST['kategori'];
        $file 	= trim($_FILES['file']['name']);

        $sql = "INSERT INTO tb_data  (n_file, nomor, kategori, nmunik) VALUES ('$nama', '$nomor', '$kategori', '$nmunik')";
        mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id

        //dapatkan id terkahir
        $query = mysqli_query($koneksi,"SELECT n_file, kategori FROM tb_data  ORDER BY id_data DESC LIMIT 1");
        $data  = mysqli_fetch_array($query);

        //mengganti nama pdf
        $nama_baru = $data['kategori']."_".$data['n_file'].".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder    = "file"; //folder tujuan

        move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
        //update nama file di database
        mysqli_query($koneksi,"UPDATE tb_data  SET file='$nama_baru' WHERE n_file='$data[n_file]' ");
        
        // header('location:../ep/data.php?alert=upload-berhasil');
        echo"
        <script language='JavaScript'>
                alert('Dokumen berhasil ditambahkan');
                document.location='../ep/data.php';
        </script>";

        } else
        {
        echo "Gagal Upload File Bukan PDF! <a href='data.php'> Kembali </a>";
        }
}
//pengecekan tipe harus pdf

?>