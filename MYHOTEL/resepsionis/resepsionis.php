<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Data Resepsionis </p>
<a href="resepsionis_tambah.php">Tambah Data</a>
	<table border="1">
	<tr>
		
		<th>id_resepsionis</th>
		<th>nama_resepsionis</th>
		<th>opsi</th>
	</tr>
	<tr>
	<?php
	include 'koneksi.php';
	$sql = mysql_query ("SELECT * FROM resepsionis ORDER BY id_resepsionis") or die(mysql_error());
	$no=0;
	while($data = mysql_fetch_array($sql))
	{
	$no++;
	$id_resepsionis=$data['id_resepsionis'];
	
		?>
		<td><?php echo $data['id_resepsionis']; ?></td>
		<td><?php echo $data['nama_resepsionis']; ?></td>
		<td> 
			<a href="resepsionis_edit.php<?php echo '?id_resepsionis=' . $id_resepsionis; ?>">edit<a> ||
			<a href="resepsionis_hapus_prs.php<?php echo '?id_resepsionis=' . $id_resepsionis; ?>">hapus<a>
			</td>
		</tr>
	<?php } ?>
	</table>
<a href="index.html">Kembali</a>
</body>
</html>