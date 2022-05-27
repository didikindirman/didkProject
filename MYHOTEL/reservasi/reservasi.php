<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Data Reservasi </p>
<a href="reservasi_tambah.php">Tambah Data</a>
	<table border="1">
	<tr>
		
		<th>kode_reservasi</th>
		<th>tgl_masuk</th>
		<th>tgl_keluar</th>
		<th>tarif</th>
		<th>id_KTP</th>
		<th>nomor_kamar</th>
		<th>id_resepsionis</th>
		<th>id_fasilitas</th>
		<th>opsi</th>
	</tr>
	<tr>
	<?php
	include 'koneksi.php';
	$sql = mysql_query ("SELECT * FROM reservasi ORDER BY kode_reservasi") or die(mysql_error());
	$no=0;
	while($data = mysql_fetch_array($sql))
	{
	$no++;
	$kode_reservasi=$data['kode_reservasi'];
	
		?>
		<td><?php echo $data['kode_reservasi']; ?></td>
		<td><?php echo $data['tgl_masuk']; ?></td>
		<td><?php echo $data['tgl_keluar']; ?></td>
		<td><?php echo $data['tarif']; ?></td>
		<td><?php echo $data['id_KTP']; ?></td>
		<td><?php echo $data['nomor_kamar']; ?></td>
		<td><?php echo $data['id_resepsionis']; ?></td>
		<td><?php echo $data['id_fasilitas']; ?></td>
		<td> 
			<a href="reservasi_edit.php<?php echo '?kode_reservasi=' . $kode_reservasi; ?>">edit<a> ||
			<a href="reservasi_hapus_prs.php<?php echo '?kode_reservasi=' . $kode_reservasi; ?>">hapus<a>
			</td>
		</tr>
	<?php } ?>
	</table>
<a href="index.html">Kembali</a>
</body>
</html>