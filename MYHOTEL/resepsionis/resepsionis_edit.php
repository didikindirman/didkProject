<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
<?php 
	include 'koneksi.php';
	$id_resepsionis = $_GET['id_resepsionis'];
	$sql = mysql_query("SELECT * FROM resepsionis WHERE id_resepsionis='$id_resepsionis'") or die(mysql_error());
	$data = mysql_fetch_array($sql);
?>

	<form action="resepsionis_edit_prs.php" method="POST">
		<input type="hidden" name="id_resepsionis" value="<?php echo $data['id_resepsionis'] ?>" required>
		<th>id_resepsionis :</th>
		<td><?php echo $data['id_resepsionis']; ?></td> <br> 
		<label>nama_resepsionis</label>
		<input type="text" name="nama_resepsionis" value="<?php echo $data['nama_resepsionis'] ?>" required> <br> 
		<input type="submit" value="Simpan">
	</form>
<a href="resepsionis.php">Kembali</a>
</body>
</html>