<!-- Your HTML and previous code here -->
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.FARIDGANTENG.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.FARIDGANTENG.COM</h2>
	<br/>
	<a href="tambah.php">TAMBAH DATA MAHASISWA</a>
	<br/>
	<br/>
	<h3>DATA MAHASISWA EKONOMI</h3>
	<form method="post" action="tambah_aksi.php">

<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Hoby</th>
        <th>Opsi</th>
    </tr>
    <?php
    include "koneksi.php"; // Assuming this file contains database connection code

    // Use the $koneksi variable from the included file for mysqli_query()
    $query = "SELECT * FROM ekonomi";
    $query_mysql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi)); // Use $koneksi here
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['hoby']; ?></td>
            <td>
                <a class="edit" href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?nim=<?php echo $data['nim']; ?>">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>

<!-- The rest of your HTML and PHP code -->
