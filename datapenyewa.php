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
                    <p style="color: black; font-size: 45px; font-weight: bold;">Data penyewa</p>
                    </div>
            </nav>
            <a href="tambahpenyewa.php"><button>Tambah penyewa</button></a>
            <br><br>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>N0</th>
						<th>Nama Pemesan</th>
						<th>Tanggal Pesan</th>
						<th>Alamat Pemesan</th>
						<th>No.telp Pemesan</th>
						<th>Pesan yang ingin disampaikan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php 
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from tb_transaksi");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['tanggal']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
						<td><?php echo $d['no_telp']; ?></td>
						<td><?php echo $d['pesan']; ?></td>
						<td>
							<a href="editpenyewa.php?Id=<?php echo $d['Id']; ?>">EDIT</a> |
							<a href="hapuspenyewa.php?Id=<?php echo $d['Id']; ?>">HAPUS</a>
						</td>
					</tr>
				</tbody>
					<?php 
				}
				?>
			</table>
		</div>
<?php include "footer.php"; ?>   
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>    