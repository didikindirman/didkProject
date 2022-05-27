<?php
include 'koneksi.php';

$id_fasilitas 		= $_GET['id_fasilitas'];

$hapus = mysql_query("DELETE FROM fasilitas WHERE id_fasilitas='$id_fasilitas'") or die(mysql_error());

if($hapus)
	{
		echo "<script>alert('Data Berhasil dihapus ')</script>";
		echo '<script type="text/javascript">window.location="fasilitas.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="fasilitas.php"</script>'; 
	}

?>