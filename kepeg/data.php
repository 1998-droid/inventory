<?php

    include_once "../_header.php";

?>

<div id="layoutSidenav_content">
   <main>
       <div class="container-fluid px-4">
           <h1 class="mt-4">Tables</h1>
           <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../ep/data.php">KEMBALI</a></li>
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
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
                                    $sql = mysqli_query($koneksi, "SELECT a.id_data,a.n_file,a.nomor,b.kategori, c.nmunik,a.file AS berkas FROM tb_data a 
                                    JOIN  tb_user b on a.kategori=b.kategori JOIN tb_ep c ON a.kategori=c.kategori WHERE c.id_ep='$id' ") 
                                    or die (mysqli_error($koneksi));
                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $data['n_file']; ?></td>
                                            <td><?php echo $data['nomor']; ?></td>
                                            <td><?php echo $data['kategori']; ?></td>
                                            <td><?php echo $data['nmunik']; ?></td>
                                            <td><a href="preview.php?id=<?php echo $data['id_data'];?>" class="btn btn-primary btn-sm" >Preview</a>
                                            <a href="hps.php?id=<?php echo $data['id_data'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm" >Hapus</a>
                                            <a href="unduh.php?file=<?php echo $data['berkas'];?>" class="btn btn-warning btn-sm" >Unduh</a>
                                            <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal<?php echo $data['id_data'];?>">Edit</a>
                                            
                                        </td>
                                            
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
                        <div class="modal fade" id="modal<?php echo $data['id_data']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modal">Edit Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                                                        data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                                                    <input type="text" class="form-control" value="<?php echo $data['n_file']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                                                                    <textarea class="form-control" rows="5"><?php echo $data['nomor']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Jenis Barang</label>
                                                                    <input type="text" class="form-control" value="<?php echo $data['kategori']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Harga Barang</label>
                                                                    <input type="text" class="form-control" value="<?php echo $data['nmunik']; ?>">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    </div>
                </main>

           
 <?php
    include_once "../_footer.php";
?>