<?php
include_once "../_header.php";
?>
<div id="layoutSidenav_content">
<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Upload File</h3></div>
                <div class="card-body">
<form action="pro_ep.php" method="post" enctype="multipart/form-data">
    <div class="row g-2">
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="nama" id="floatingInputGrid" placeholder="Nama EP" required>
        <label for="floatingInputGrid">Nama EP</label>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" class="form-control" name="nmunik" id="floatingInputGrid" placeholder="Poin"  required>
        <label for="floatingSelectGrid">Poin</label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-floating">
        <input type="text" readonly class="form-control" name="kategori" id="floatingInputGrid" placeholder="kategori" value="<?=($_SESSION['kategori'])?>" >
        <label for="floatingSelectGrid">Kategori</label>
   
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