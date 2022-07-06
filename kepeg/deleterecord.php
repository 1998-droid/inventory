<?php
include_once("koneksi.php");
if($_REQUEST['delete'])
{
 $sql = "DELETE FROM tb_data1 WHERE id_data1='".$_REQUEST['delete']."'";
 $resultset = mysqli_query($koneksi, $sql) or die("database error:". mysqli_error($koneksi));
 if($resultset) 
 {
  echo "Record Deleted Successfully";
 }
}
?>