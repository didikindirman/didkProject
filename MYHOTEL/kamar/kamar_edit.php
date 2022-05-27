<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
<?php 
	include 'koneksi.php';
	$nomor_kamar = $_GET['nomor_kamar'];
	$sql = mysql_query("SELECT * FROM kamar WHERE nomor_kamar='$nomor_kamar'") or die(mysql_error());
	$data = mysql_fetch_array($sql);
?>

	<form action="kamar_edit_prs.php" method="POST">
		<input type="hidden" name="nomor_kamar" value="<?php echo $data['nomor_kamar'] ?>" required>
		<th>nomor_kamar :</th>
		<td><?php echo $data['nomor_kamar']; ?></td> <br> 
		<label>tipe_kamar</label>
		<input type="text" name="tipe_kamar" value="<?php echo $data['tipe_kamar'] ?>" required> <br> 
		<label>id_fasilitas</label>
		<input type="text" name="id_fasilitas" value="<?php echo $data['id_fasilitas'] ?>" required> <br> 
		<label>tarif</label>
		<input type="text" name="tarif" value="<?php echo $data['tarif'] ?>" required> <br>
		<input type="submit" value="Simpan">
	</form>
<a href="kamar.php">Kembali</a>
</body>
</html>