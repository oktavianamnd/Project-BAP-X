<?php include "header.php"; ?>
<?php

require 'koneksi.php';

$mobils = query("SELECT * FROM tb_mobil");

?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                        <p style="color: black; font-size: 45px; font-weight: bold;">Data mobil</p>
                    </div>
            </nav>
            <br>
            <a href="tambahmobil.php"><button>Tambah mobil</button></a>
            <br><br>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Plat nomor</th>
                        <th>Tahun</th>
                        <th>Warna</th>
                        <th>Bensin</th>
                        <th>Penumpang</th>
                        <th>Waktu</th>
                        <th>Kondisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1 ?>
                <?php foreach ($mobils as $mobil) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $mobil['merk'] ?></td>
                        <td><img width="150px" src="image/<?= $mobil['gambar'] ?>" alt="<?= $mobil['merk'] ?>"></td>
                        <td>Rp <?= $mobil['harga'] ?></td>
                        <td><?= $mobil['plat_no'] ?></td>
                        <td><?= $mobil['tahun'] ?></td>
                        <td><?= $mobil['warna'] ?></td>
                        <td><?= $mobil['bensin'] ?></td>
                        <td><?= $mobil['penumpang'] ?> Orang</td>
                        <td><?= $mobil['waktu'] ?></td>
                        <td><?= $mobil['kondisi'] ?></td>
                        <td>
                            <a href="editmobil.php?id=<?= $mobil['id_mobil'] ?>">EDIT</a> |
                            <a href="hapusmobil.php?id=<?= $mobil['id_mobil'] ?>">HAPUS</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
  
<?php include "footer.php"; ?>    
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>    