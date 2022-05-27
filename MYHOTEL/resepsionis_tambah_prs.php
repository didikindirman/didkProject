<?php
include 'koneksi.php';

$id_resepsionis 	= $_POST['id_resepsionis'];
$nama_resepsionis 	= $_POST['nama'];

$simpan = mysql_query("INSERT INTO resepsionis VALUES('$id_resepsionis','$nama_resepsionis')") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="resepsionis.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="resepsionis.php"</script>'; 
	}

?>