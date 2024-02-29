<?php
include "header.php";
include "navbar.php";
?>

<body>
	<style>
		body{
		margin: 0;
		padding: 0;
		background: url(background.jpg);
		background-size: cover;
		background-position: center;
		font-family: Arial, sans-serif;
		}
	</style>



</body>

<div class="card mt-2">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body bg-info">
						<center>
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-light btn-sm">Detail</a>
						</center>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body bg-warning">
						<center>
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-light btn-sm">Detail</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-2">
	<div class="p-3 text-primary-emphasis bg-warning-subtle border border-primary-subtle rounded-3">
		<p>Selamat datang dihalaman petugas, silahkan anda bisa mengakses beberapa fitur</p>
	</div>
</div>
<?php
include "footer.php";
?>