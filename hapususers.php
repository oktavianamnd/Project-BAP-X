<?php 

include 'koneksi.php';
 
$id = $_GET['Id'];
 
 
mysqli_query($koneksi,"delete from login where Id='$id'");
 
header("location:datausers.php");
 
?>