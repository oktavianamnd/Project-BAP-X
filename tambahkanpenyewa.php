<?php 
include 'koneksi.php';
         

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$pesan = $_POST['pesan'];
         

mysqli_query($koneksi,"insert into tb_transaksi(nama, tanggal, alamat, no_telp, pesan) values('$nama','$tanggal','$alamat','$no_telp', '$pesan')");

header("location:datapenyewa.php");
 
?>