<?php 
include 'config.php';

$id = $_POST['id'];
$Deskripsi= $_POST['Deskripsi'];
$Opsi= $_POST['Opsi'];
$gambar = $_FILES['gambar']['name'];
$keterangan = $_POST['keterangan'];

if(isset($_POST['upload'])) {
 
  $eks_dibolehkan = ['png', 'jpg']; // ekstensi yang diperbolehkan
  $x = explode('.', $gambar); // memisahkan nama file dengan ekstensi
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  
  // cek ekstensi yang dibolehkan
  if(in_array($ekstensi, $eks_dibolehkan) === true) {
    move_uploaded_file($file_tmp, 'gambar/' . $gambar); // memindahkan file gambar
  
    // jalankan query insert
    $query = mysqli_query($dbconnect, "INSERT INTO data (id, Deskripsi, Opsi, gambar) VALUES ('$id', '$Deskripsi', '$Opsi', '$gambar')") or die(mysqli_error());
    

    if($query) {
      echo "<script>alert('Data berhasil disimpan'); window.location='index.php';</script>";
   header('Location:index.php');
  } else {
   echo "<script>alert('Data gagal disimpan')</script>";
   
  }
 } else {
  echo "<script>alert('Ekstensi harus PNG / JPG')</script>";
  
 }
} else {
 echo "<script>alert('Data belum lengkap')</script>";
 
}


?>