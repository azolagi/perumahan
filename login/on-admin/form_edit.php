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
	<a href="index.php">< Lihat Semua Data</a>
	
	<h3>Edit Kendaraan</h3>
	<form action="proses_edit.php" method="post">
		<?php 
		include "config.php";
		$id = $_GET['id'];
		$query = mysqli_query($dbconnect, "SELECT * FROM data WHERE id = '$id'") or die(mysqli_error());
		$data = mysqli_fetch_array($query);
		?>		
		<table>	
			<tr>
				<td>Deskripsi</td>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<td><input type="text" name="Deskripsi" value="<?php echo $data['Deskripsi'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Opsi</td>
				<td><input type="text" name="Opsi" value="<?php echo $data['Opsi'] ?>" required></td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>