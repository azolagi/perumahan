<?php 
include 'config.php';

$id = $_POST['id'];
$Deskripsi = $_POST['Deskripsi'];
$Opsi = $_POST['Opsi'];

$query = mysqli_query($dbconnect, "UPDATE data SET Deskripsi='$Deskripsi', Opsi='$Opsi' WHERE id='$id'") or die(mysqli_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
?>