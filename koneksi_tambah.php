<?php 
$koneksi = mysqli_connect("127.0.0.1","FARID","mahasiswa");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>