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
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="nama" id="inputFirstName" type="text"  placeholder="Nama File"/>
                                                        <label for="inputFirstName">Nama File</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="nomor" id="inputLastName" type="text"  placeholder="Nomor File"/>
                                                        <label for="inputLastName">Nomor</label>
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="col-md-4">
                                                <input class="form-control" name="file" id="file" type="file" />
                                                <label for="file"></label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                <button class="w-100 btn btn-primary btn-lg" type="submit">
              Kirim
            </button>6
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    </div>
                                    </main>



                    <?php
    include_once "../_footer.php";
?>