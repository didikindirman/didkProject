<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
<?php 
	include 'koneksi.php';
	$kode_reservasi = $_GET['kode_reservasi'];
	$sql = mysql_query("SELECT * FROM reservasi WHERE kode_reservasi='$kode_reservasi'") or die(mysql_error());
	$data = mysql_fetch_array($sql);
?>

	<form action="reservasi_edit_prs.php" method="POST">
		<input type="hidden" name="kode_reservasi" value="<?php echo $data['kode_reservasi'] ?>" required>
		<th>kode_reservasi :</th>
		<td><?php echo $data['kode_reservasi']; ?></td> <br> 
		<label>tgl_masuk</label>
		<input type="text" name="tgl_masuk" value="<?php echo $data['tgl_masuk'] ?>" required> <br> 
		<label>tgl_keluar</label>
		<input type="text" name="tgl_keluar" value="<?php echo $data['tgl_keluar'] ?>" required> <br> 
		<label>tarif</label>
		<input type="text" name="tarif" value="<?php echo $data['tarif'] ?>" required> <br> 
		<label>id_KTP</label>
		<input type="text" name="id_KTP" value="<?php echo $data['id_KTP'] ?>" required> <br> 
		<label>nomor_kamar</label>
		<input type="text" name="nomor_kamar" value="<?php echo $data['nomor_kamar'] ?>" required> <br> 
		<label>id_resepsionis</label>
		<input type="text" name="id_resepsionis" value="<?php echo $data['id_resepsionis'] ?>" required> <br>
		<label>id_fasilitas</label>
		<input type="text" name="id_fasilitas" value="<?php echo $data['id_fasilitas'] ?>" required> <br>
		<input type="submit" value="Simpan">
	</form>
<a href="reservasi.php">Kembali</a>
</body>
</html>