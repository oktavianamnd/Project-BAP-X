<?php 

include 'koneksi.php';
 

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$pesan = $_POST['pesan'];

mysqli_query($koneksi,"insert into pesan(Nama, Tanggal, Alamat_Rumah, No_Telepon, Pesan_yang_ingin_disampaikan) values('$nama','$tanggal','$alamat','$telp','$pesan')");

header("location:hubungi.php");
 
?>