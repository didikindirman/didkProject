<?php
include 'koneksi.php';

$id_KTP 		= $_GET['id_KTP'];

$hapus = mysql_query("DELETE FROM tamu WHERE id_KTP='$id_KTP'") or die(mysql_error());

if($hapus)
	{
		echo "<script>alert('Data Berhasil dihapus ')</script>";
		echo '<script type="text/javascript">window.location="tamu.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="tamu.php"</script>'; 
	}

?>