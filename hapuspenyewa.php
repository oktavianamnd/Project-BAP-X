<?php 

include 'koneksi.php';
 
$id = $_GET['Id'];
 
 
mysqli_query($koneksi,"delete from tb_transaksi where Id='$id'");
 
header("location:datapenyewa.php");
 
?>