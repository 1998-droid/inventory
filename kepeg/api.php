<?php
require_once "../koneksi.php";

if(function_exists($_GET['function'])) {
    $_GET['function']();
 }   
function get_karyawan()
{
 global $koneksi;      
 $query = $koneksi->query("SELECT * FROM tb_data");            
 while($row=mysqli_fetch_object($query))
 {
    $data[] =$row;
 }
 $response=array(
                'status' => 1,
                'message' =>'Success',
                'data' => $data
             );
 header('Content-Type: application/json');
 echo json_encode($response);
} 
?>