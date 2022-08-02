<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Sepeda Motor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Pendataan Kehilangan Kendaraan Bermotor Roda 2</h2>
		<h3>Polrestabes Semarang</h3>
	</div>

	<br />
	<a href="form_tambah.php">+ Tambah Data Baru</a>
	<br></br>
	<a href="logout.php">+ Logout</a>
	<h3>Data Rumah</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>No</th>
				<th>Deskripsi</th>
				<th>Gambar</th>
			</tr>
			<?php 
			include "config.php";
			$query = mysqli_query($dbconnect, "SELECT * FROM data") or die(mysqli_error());
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td><?php echo $data['id']; ?></td>
					<td><?php echo $data['Deskripsi']; ?></td>
					<td><?php echo "<img src='gambar/$data[gambar]' width='70' height='90' />";?></td> 
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>