<?php 
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($dbconnect, "DELETE FROM data WHERE id = '$id'") or die(mysqli_error());
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}
?>