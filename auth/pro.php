<?php
session_start();
    include "../koneksi.php";
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);
    $op = $_GET['op'];

    if($op=="in"){
        $sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE user='$username' AND pass='$password'") 
        or die(mysqli_error($koneksi));
        $qry = mysqli_fetch_array($sql);
        if(mysqli_num_rows($sql)==1){
            if ($qry['status']=="disable") {
                ?>
            <script language="JavaScript">
                alert('Oops! belum aktif!!!!!!!!!!');
                document.location='log.php';
            </script>
            <?php
                // header("location:log.php");
            }
            else if ($qry['status']=="enable") {
            // $qry = mysqli_fetch_array($sql);
            $_SESSION['id_user']    = $qry['id_user'];
            $_SESSION['user']    = $qry['user'];
            $_SESSION['pass']    = $qry['pass'];
            $_SESSION['hak_akses']    = $qry['hak_akses'];
            $_SESSION['status']    = $qry['status'];
           
                    if($qry['hak_akses']=="kepeg"){
                        header("location:../kepeg");
                    }else if($qry['hak_akses']=="jp"){
                        header("location:../jp");
                    }
                }
        }
        else{
            ?>
            <script language="JavaScript">
                alert('Oops! Login Failed. Username & password tidak sesuai ...');
                document.location='log.php';
            </script>
            <?php
        }
    }
    else if($op=="out"){
        unset($_SESSION['id_user']);
        unset($_SESSION['nama']);
        unset($_SESSION['user']);
        unset($_SESSION['pass']);
        unset($_SESSION['hak_akses']);
        header("location:/.");
    }
?>
?>