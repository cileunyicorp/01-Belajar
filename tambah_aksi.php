<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$hoby = $_POST['hoby'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat','$hoby')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>