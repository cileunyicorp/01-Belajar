<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("127.0.0.1","FARID","Bandung01","mahasiswa");
 
// isikan dengan nama database yang akan di hubungkan
// $db = mysqli_select_db($host,"mahasiswa");
 
?>



<?php 
$koneksi = mysqli_connect("127.0.0.1","FARID","","mahasiswa","ekonomi");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>