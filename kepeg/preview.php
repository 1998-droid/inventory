<?php
    include_once "../_header.php";
    include_once "../koneksi.php";

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
<div class="col-lg-12">
    
    <?php
    $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
    $query = mysqli_query($koneksi,"SELECT * FROM tb_data WHERE id_data='$id' ");
    $data  = mysqli_fetch_array($query);


    ?>
            
            <h1>Judul Document: <?php echo $data['filename'];?></h1>
<hr>
<b>Nama:</b> <?php echo $data['filename'];?>| | <a href='data.php'> Kembali </a>
<b>Nomor:</b> <?php echo $data['nomor'];?>
<hr>
            
            <embed src="file/<?php echo $data['file'];?>" type="application/pdf" width="1000" height="600" download="<?php echo $data['nama']."pdf";?>">

    </div>
    </div>
    </main>

<?php
    include_once "../_footer.php";
?>