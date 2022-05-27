<?php
include 'koneksi.php';

$id_fasilitas	 	= $_POST['id_fasilitas'];
$nama_fasilitas		= $_POST['nama_fasilitas'];

$simpan = mysql_query("INSERT INTO fasilitas VALUES('$id_fasilitas','$nama_fasilitas')") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="fasilitas.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="fasilitas.php"</script>'; 
	}

?>