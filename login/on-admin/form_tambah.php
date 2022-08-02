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

	<h3>Input Kendaraan Baru</h3>
	<form action="proses_tambah.php" method="post" enctype="multipart/form-data">		
		<table>
			<tr>				
				<td><input type="hidden" name="No" required></td>					
			</tr>	
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="Deskripsi" required></td>					
			</tr>	
			<tr>
				<td><input type="hidden" name="Opsi" required></td>					
			</tr>	
		
		<tr>
        <td><label for="gambar">Pilih gambar yang akan diupload</label></td>
		<td><input type="file" name="gambar" required=""></td>
        </tr>
      <td></td>
	  <tr>
		<td><button type="submit" name="upload" >Upload</button></td>
      </tr>	


			
		</table>
	</form>
	
	<hr><br>


	
	
</body>
</html>