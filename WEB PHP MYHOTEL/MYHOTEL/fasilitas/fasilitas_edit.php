<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
<?php 
	include 'koneksi.php';
	$id_fasilitas = $_GET['id_fasilitas'];
	$sql = mysql_query("SELECT * FROM fasilitas WHERE id_fasilitas='$id_fasilitas'") or die(mysql_error());
	$data = mysql_fetch_array($sql);
?>

	<form action="fasilitas_edit_prs.php" method="POST">
		<input type="hidden" name="id_fasilitas" value="<?php echo $data['id_fasilitas'] ?>" required>
		<th>id_fasilitas :</th>
		<td><?php echo $data['id_fasilitas']; ?></td> <br> 
		<label>nama_fasilitas</label>
		<input type="text" name="nama_fasilitas" value="<?php echo $data['nama_fasilitas'] ?>" required> <br> 
		<input type="submit" value="Simpan">
	</form>
<a href="fasilitas.php">Kembali</a>
</body>
</html>