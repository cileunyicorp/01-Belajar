<?php
// Koneksi ke database
include 'koneksi.php'; // Pastikan ini mencakup detail koneksi ke database

// Mengambil data yang dikirim dari formulir
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hoby = $_POST['hoby'];

// Memasukkan data ke dalam database
$query = "INSERT INTO ekonomi (nim, nama, alamat, hoby) VALUES ('$nim', '$nama', '$alamat', '$hoby')";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    // Data berhasil dimasukkan
    header("location:index.php?pesan=input");
} else {
    // Gagal memasukkan data
    die("Query input gagal: " . mysqli_error($koneksi));
}
?>