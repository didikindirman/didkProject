<?php
include 'koneksi.php';

$kode_reservasi 		= $_GET['kode_reservasi'];

$hapus = mysql_query("DELETE FROM reservasi WHERE kode_reservasi='$kode_reservasi'") or die(mysql_error());

if($hapus)
	{
		echo "<script>alert('Data Berhasil dihapus ')</script>";
		echo '<script type="text/javascript">window.location="reservasi.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="reservasi.php"</script>'; 
	}

?>