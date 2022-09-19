<?php include 'koneksi.php'; 
	session_start();
	if($_SESSION['status_login']!=true){
	header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">

	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
		<h2 style="text-align: center; margin-top: 20px;">Data Data produk</h2>		
		<br>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
		<br>
		
		
		<br>		
		<br>
		
		<table class="table table-bordered table-striped ">
			<tr>
				<th width="20%">Nama</th>
				<th width="20%">Deskripsi</th>
				<th width="40%">Alamat</th>
				<th width="20%">Foto</th>
				<th width="20%" colspan="2">Aksi</th>
			</tr>
			<?php 
			$data = mysqli_query($conn,"select * from produk");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $d['nama_produk']; ?></td>
					<td><?php echo $d['deskripsi']; ?></td>
					<td><?php echo $d['harga']; ?></td>
					<td><img src="gambar/<?php echo $d['foto_produk'] ?>" width="200" ></td>
					<td><a href="ubah_produk.php?id_produk=<?=$d['id_produk']?>" class="btn btn-success"> Ubah</a> </td>
					<td><a href="hapus.php?id_siswa=<?=$d['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
				</tr>
				<?php
			}
 
			?>
		</table>
		<div class="button">
		<a href="tambah_produk.php" target="_blank" class="btn btn-info btn-sm">Tambah Data</a>
	</div>
	</div>
</body>
</html>