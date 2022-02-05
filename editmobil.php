<?php

require 'koneksi.php';

$id = $_GET["id"];

$mobil = query("SELECT * FROM tb_mobil WHERE id_mobil = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah');
                window.location.href = 'datamobil.php'
			</script>
		";
    } else {
        echo "<script>
				alert('data gagal diubah');
			</script>";
    }
}

?>
<?php include "header.php"; ?>

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
                    <p style="color: black; font-size: 45px; font-weight: bold;">Edit mobil</p>
                    </div>
            </nav>

            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $mobil["id_mobil"]; ?>">
                <input type="hidden" name="gambar_lama" value="<?= $mobil["gambar"]; ?>">
                <label for="merk">Merk Mobil</label>
                <input type="text" name="merk" id="merk" required="" value="<?= $mobil["merk"]; ?>" style="margin-left: 83px;"><br><br>
           
                <label for="gambar">Gambar</label>
                <img src="image/<?= $mobil['gambar']; ?>" width="200px" style="margin-left: 100px;"><br>
                <input type="file" name="gambar" id="gambar">
                <br><br>  
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" required="" value="<?= $mobil["harga"]; ?>" style="margin-left: 119px;">
                <br><br>
                <label for="plat_no">Plat Nomor</label>
                <input type="text" name="plat_no" id="plat_no" required="" value="<?= $mobil["plat_no"]; ?>" style="margin-left: 83px;">
                <br><br>    
                <label for="tahun">Tahun</label>
                <input type="number" name="tahun" id="tahun" required="" value="<?= $mobil["tahun"]; ?>" style="margin-left: 120px;">
                <br><br> 
                <label for="warna">Warna</label>
                <input type="text" name="warna" id="warna" required="" value="<?= $mobil["warna"]; ?>" style="margin-left: 117px;">
                <br><br>    
                <label for="bensin">Bensin</label>
                <input type="text" name="bensin" id="bensin" required="" value="<?= $mobil["bensin"]; ?>" style="margin-left: 117px;">
                <br><br>    
                <label for="penumpang">Penumpang</label>
                <input type="number" name="penumpang" id="penumpang" required="" value="<?= $mobil["penumpang"]; ?>" style="margin-left: 70px;">
                <br><br>  
                <label for="waktu">Waktu</label>
                <input type="text" name="waktu" id="waktu" required="" value="<?= $mobil["waktu"]; ?>" style="margin-left: 120px;">
                <br><br>  
                <label for="kondisi">Kondisi</label>
                <input type="text" name="kondisi" id="kondisi" required="" value="<?= $mobil["kondisi"]; ?>" style="margin-left: 120px;">
                <br><br>  
                <button type="submit" name="submit" style="width: 150px;">Update</button><br><br>
                <a href="datamobil.php"><button type="button" style="width: 150px;">Kembali</button></a>
            </form>
        </div>
<?php include "footer.php"; ?>   
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>    