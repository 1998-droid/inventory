<?php

    include_once "../_header.php";

?>

<div id="layoutSidenav_content">
   <main>
       <div class="container-fluid px-4">
           <h1 class="mt-4">Tables</h1>
           <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
           </ol>
           <div class="card mb-4">
               <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <!-- <a target="_blank" href="https://datatables.net/">official DataTables documentation</a> -->
                </div>
                </div>
                    <div class="card mb-4">
                    <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nomor</th>
                                            <th>File</th>
                                            <th>Wkt Upload</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_data1") or die (mysqli_error($koneksi));

                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['nomor']; ?></td>
                                            <td><?php echo $data['file']; ?></td>
                                            <td><?php echo $data['time']; ?></td>
                                            <td><a href="preview.php?id=<?php echo $data['id_data1'];?>" class="btn btn-primary btn-sm" >Preview</a>
                                            <a href="hps.php?id=<?php echo $data['id_data1'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm" >Hapus</a></td>
                                            
                                        </tr>
                                        <?php
                                }
                                ?>
                                    </tbody>
                                </table>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="btn btn-primary" href="upload.php">Upload Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
 <?php
    include_once "../_footer.php";
?>