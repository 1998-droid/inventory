<?php
    include_once "../_header.php";

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
<div class="col-lg-12">
    
    <?php
    $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
    $query = mysqli_query($koneksi,"SELECT a.id_data,a.n_file,a.nomor,b.kategori, c.nmunik,a.file AS berkas FROM tb_data a 
    JOIN  tb_user b on a.kategori=b.kategori JOIN tb_ep c ON a.kategori=c.kategori WHERE id_data='$id' ");
    $data  = mysqli_fetch_array($query);


    ?>
            
            <h1>Judul Document: <?php echo $data['n_file'];?></h1>
<hr>
<b>Nama:</b> <?php echo $data['n_file'];?>| | <a href="javascript:history.go(-1)">link text here</a>
<b>Nomor:</b> <?php echo $data['nomor'];?>
<hr>
            
            <embed src="file/<?php echo $data['berkas'];?>" type="application/pdf" width="1000" height="600">

    </div>
    </div>
    </main>

<?php
    include_once "../_footer.php";
?>