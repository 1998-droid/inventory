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
                <!-- notif berhasil -->
                
                <!-- notif berhasil -->
                </div>
                </div>
                    <div class="card mb-4">
                    <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-responsive table-xs">
                                    <thead>
                                        <tr >
                                            <th class="col-4">Nama</th>
                                            <th>Poin</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT a.id_ep, a.epname, a.kategori, a.nmunik, b.user FROM tb_ep a JOIN  tb_user b on a.kategori=b.kategori where user='$_SESSION[username]'") or die (mysqli_error($koneksi));
                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $data['epname']; ?></td>
                                            <td><?php echo $data['nmunik']; ?></td>
                                            <td><?php echo $data['kategori']; ?></td>
                                            <td><a href="../kepeg/data.php?id=<?php echo $data['id_ep'];?>" class="btn btn-primary btn-sm" >Buka</a>
                                            <a href="../kepeg/upload2.php?id=<?php echo $data['id_ep'];?>" class="btn btn-warning btn-sm" >upload</a>
                                            <!-- <a href="del.php?id=<?php echo $data['id_ep'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm" >Hapus</a> -->
                                            <a href="edit.php?id=<?php echo $data['id_ep'];?>" class="btn btn-success btn-sm" >Edit</a>
                                        </td>
                                            
                                        </tr>
                                        <?php
                                }
                                ?>
                                    </tbody>
                                </table>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="btn btn-primary" href="add.php">Tambah EP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
 <?php
    include_once "../_footer.php";
?>