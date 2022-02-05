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
                    <p style="color: black; font-size: 45px; font-weight: bold;">Data users</p>
                    </div>
            </nav>
            <a href="tambahusers.php"><button>Tambah users</button></a>
            <br><br>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>N0</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Password</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php 
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from login");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['Nama']; ?></td>
						<td><?php echo $d['Username']; ?></td>
						<td><?php echo $d['Password']; ?></td>
						<td><?php echo $d['Email']; ?></td>
						<td>
							<a href="editusers.php?Id=<?php echo $d['Id']; ?>">EDIT</a> |
							<a href="hapususers.php?Id=<?php echo $d['Id']; ?>">HAPUS</a>
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