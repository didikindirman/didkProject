<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Data Tamu </p>
<a href="tamu_tambah.php">Tambah Data</a>
	<table border="1">
	<tr>
		
		<th>id_KTP</th>
		<th>nama</th>
		<th>alamat</th>
		<th>no_telepon</th>
		<th>opsi</th>
	</tr>
	<tr>
	<?php
	include 'koneksi.php';
	$sql = mysql_query ("SELECT * FROM tamu ORDER BY id_KTP") or die(mysql_error());
	$no=0;
	while($data = mysql_fetch_array($sql))
	{
	$no++;
	$id_KTP=$data['id_KTP'];
	
		?>
		<td><?php echo $data['id_KTP']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['no_telepon']; ?></td>
		<td> 
			<a href="tamu_edit.php<?php echo '?id_KTP=' . $id_KTP; ?>">edit<a> ||
			<a href="tamu_hapus_prs.php<?php echo '?id_KTP=' . $id_KTP; ?>">hapus<a>
			</td>
		</tr>
	<?php } ?>
	</table>
<a href="index.php">Kembali</a>
</body>
</html>