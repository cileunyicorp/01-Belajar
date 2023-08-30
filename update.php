<?php 
// Koneksi ke database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hoby = $_POST['hoby'];

// Update data di database
$query = "UPDATE ekonomi SET nim='$nim', nama='$nama', alamat='$alamat', hoby='$hoby' WHERE nim='$nim'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Jika update berhasil, arahkan kembali ke index.php
    header("location:index.php?pesan=update");
} else {
    // Jika update gagal, tampilkan pesan error
    die("Query update gagal: " . mysqli_error($koneksi));
}
?>
