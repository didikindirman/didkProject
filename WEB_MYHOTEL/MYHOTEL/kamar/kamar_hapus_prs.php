<?php
include 'koneksi.php';

$nomor_kamar 		= $_GET['nomor_kamar'];

$hapus = mysql_query("DELETE FROM kamar WHERE nomor_kamar='$nomor_kamar'") or die(mysql_error());

if($hapus)
	{
		echo "<script>alert('Data Berhasil dihapus ')</script>";
		echo '<script type="text/javascript">window.location="kamar.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="kamar.php"</script>'; 
	}

?>