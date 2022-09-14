<?php
    include_once "../_header.php";
    $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
    $sql = mysqli_query($koneksi, "SELECT * from tb_ep WHERE id_ep='$id' ORDER BY id_ep='$id'") 
    or die (mysqli_error($koneksi));
    $data  = mysqli_fetch_array($sql);
?>
<script src="pdf.js"></script>
<script src="pdf.worker.js"></script>
<div id="layoutSidenav_content">
<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Upload File</h3></div>
                <div class="card-body">
<form action="pro.php" method="post" enctype="multipart/form-data">
    <div class="row g-2">
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="nama" id="floatingInputGrid" placeholder="nama" >
        <label for="floatingInputGrid">nama</label>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="nomor" id="floatingInputGrid" placeholder="nomor"  required>
        <label for="floatingSelectGrid">nomor</label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" readonly class="form-control" name="kategori" id="floatingInputGrid" placeholder="kategori" value="<?=($_SESSION['kategori'])?>" >
        <label for="floatingSelectGrid">kategori</label>
   
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="nmunik" id="floatingInputGrid" placeholder="point" value="<?=($data['nmunik'])?>" required >
        <label for="floatingSelectGrid">Point</label>
        </div>
    </div>
    
    <div class="row g-2">
    <div class="col-md-4 mt-4">
        <div class="form-floating">
        <input type="file" id="pdf-file" name="file" accept="application/pdf" required>
    </div>
    </div>
    
    <div class="col-md-4 mt-4">
    <button class="w-100 btn btn-primary btn-lg" type="submit" name="simpan">
        Upload
     </button>
     </div>
</form>
</div>
</div>
</div>
</div>
</div>
</main>

                    <?php
    include_once "../_footer.php";
?>