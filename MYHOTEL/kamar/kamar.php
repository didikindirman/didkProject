<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Data Kamar </p>
<a href="kamar_tambah.php">Tambah Data</a>
	<table border="1">
	<tr>
		
		<th>nomor_kamar</th>
		<th>tipe_kamar</th>
		<th>id_fasilitas</th>
		<th>tarif</th>
		<th>opsi</th>
	</tr>
	<tr>
	<?php
	include 'koneksi.php';
	$sql = mysql_query ("SELECT * FROM kamar ORDER BY nomor_kamar") or die(mysql_error());
	$no=0;
	while($data = mysql_fetch_array($sql))
	{
	$no++;
	$nomor_kamar=$data['nomor_kamar'];
	
		?>
		<td><?php echo $data['nomor_kamar']; ?></td>
		<td><?php echo $data['tipe_kamar']; ?></td>
		<td><?php echo $data['id_fasilitas']; ?></td>
		<td><?php echo $data['tarif']; ?></td>
		<td> 
			<a href="kamar_edit.php<?php echo '?nomor_kamar=' . $nomor_kamar; ?>">edit<a> ||
			<a href="kamar_hapus_prs.php<?php echo '?nomor_kamar=' . $nomor_kamar; ?>">hapus<a>
			</td>
		</tr>
	<?php } ?>
	</table>
<a href="index.html">Kembali</a>
</body>
</html>