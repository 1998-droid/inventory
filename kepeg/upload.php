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
                                        <form action="pro.php" method="post" enctype="multipart/form-data">
                                            <div class="row g-2">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid" placeholder="nama" >
                                                <label for="floatingInputGrid">nama</label>
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid" placeholder="nomor" >
                                                <label for="floatingSelectGrid">nomor</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid" placeholder="kategori" >
                                                <label for="floatingSelectGrid">kategori</label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row g-2">
                                            <div class="col-md-4 mt-4">
                                                <div class="form-floating">
                                                <input type="file" class="form-control" id="floatingInputGrid" >
                                                
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-4 mt-4">
                                            <button class="w-100 btn btn-primary btn-lg" type="submit">
                                                Upload
                                             </button>
                                             </div>
                                        </form>
                                    </div>
                                    </div>
                                    </main>
                    <?php
    include_once "../_footer.php";
?>