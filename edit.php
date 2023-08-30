<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.FARIDGANTENG.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.FARIDGANTENG.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA EKONOMI</h3>
 
	<?php
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$data = mysqli_query($koneksi,"select * from ekonomi where nim='$nim'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">0
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" value="<?php echo $d['nim']; ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
                    <td>Hoby</td>
					<td><input type="text" name="hoby" value="<?php echo $d['hoby']; ?>"></td>
				</tr>
				<tr>
                    
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>
