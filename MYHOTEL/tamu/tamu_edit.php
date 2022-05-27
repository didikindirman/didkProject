<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
<?php 
	include 'koneksi.php';
	$id_KTP = $_GET['id_KTP'];
	$sql = mysql_query("SELECT * FROM tamu WHERE id_KTP='$id_KTP'") or die(mysql_error());
	$data = mysql_fetch_array($sql);
?>

	<form action="tamu_edit_prs.php" method="POST">
		<input type="hidden" name="id_KTP" value="<?php echo $data['id_KTP'] ?>" required>
		<th>id_KTP :</th>
		<td><?php echo $data['id_KTP']; ?></td> <br> 
		<label>nama</label>
		<input type="text" name="nama" value="<?php echo $data['nama'] ?>" required> <br> 
		<label>alamat</label>
		<input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required> <br> 
		<label>no_telepon</label>
		<input type="text" name="no_telepon" value="<?php echo $data['no_telepon'] ?>" required> <br>
		<input type="submit" value="Simpan">
	</form>
<a href="tamu.php">Kembali</a>
</body>
</html>