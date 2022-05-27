<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Data Fasilitas </p>
<a href="fasilitas_tambah.php">Tambah Data</a>
	<table border="1">
	<tr>
		
		<th>id_fasilitas</th>
		<th>nama_fasilitas</th>
		<th>opsi</th>
	</tr>
	<tr>
	<?php
	include 'koneksi.php';
	$sql = mysql_query ("SELECT * FROM fasilitas ORDER BY id_fasilitas") or die(mysql_error());
	$no=0;
	while($data = mysql_fetch_array($sql))
	{
	$no++;
	$id_fasilitas=$data['id_fasilitas'];
	
		?>
		<td><?php echo $data['id_fasilitas']; ?></td>
		<td><?php echo $data['nama_fasilitas']; ?></td>
		<td> 
			<a href="fasilitas_edit.php<?php echo '?id_fasilitas=' . $id_fasilitas; ?>">edit<a> ||
			<a href="fasilitas_hapus_prs.php<?php echo '?id_fasilitas=' . $id_fasilitas; ?>">hapus<a>
			</td>
		</tr>
	<?php } ?>
	</table>
<a href="index.html">Kembali</a>
</body>
</html>