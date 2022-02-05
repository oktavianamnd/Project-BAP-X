<?php

require 'koneksi.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan');
			</script>
		";
    } else {
        echo "<script>
				alert('data gagal ditambahkan');
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
                    <p style="color: black; font-size: 45px; font-weight: bold;">Tambah Mobil</p>
                    </div>
            </nav>
            <form action="" method="POST" enctype="multipart/form-data">
                
                        <label for="merk">Merk Mobil</label>
                        <input type="text" name="merk" id="merk" required="" style="margin-left: 65px;"><br><br>
                    
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" required="" style="margin-left: 83px;"><br><br>
                    
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" required="" style="margin-left: 101px;"><br><br>
                  
                        <label for="plat_no">Plat Nomor</label>
                        <input type="text" name="plat_no" id="plat_no" required="" style="margin-left: 62px;"><br><br>
                   
                        <label for="tahun">Tahun</label>
                        <input type="number" name="tahun" id="tahun" required="" style="margin-left: 100px;"><br><br>

                        <label for="warna">Warna</label>             
                        <input type="text" name="warna" id="warna" required="" style="margin-left: 98px;"><br><br>
                    
                        <label for="bensin">Bensin</label>
                        <input type="text" name="bensin" id="bensin" required="" style="margin-left: 100px;"><br><br>
                    
                        <label for="penumpang">Penumpang</label>
                        <input type="number" name="penumpang" id="penumpang" required="" style="margin-left: 55px;"><br><br>
                    
                        <label for="waktu">Waktu</label>
                        <input type="text" name="waktu" id="waktu" required="" style="margin-left: 103px;"><br><br>

                        <label for="waktu">Kondisi</label>
                        <input type="text" name="kondisi" id="kondisi" required="" style="margin-left: 103px;"><br><br>
                    
                        <button type="submit" name="submit">Tambah data</button><br><br>
                        <a href="datamobil.php"><button type="button">Kembali</button></a>        
            </form>
        </div>
<?php include "footer.php"; ?>   
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>    