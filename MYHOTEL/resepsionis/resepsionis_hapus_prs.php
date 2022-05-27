<?php
include 'koneksi.php';

$id_resepsionis 		= $_GET['id_resepsionis'];

$hapus = mysql_query("DELETE FROM resepsionis WHERE id_resepsionis='$id_resepsionis'") or die(mysql_error());

if($hapus)
	{
		echo "<script>alert('Data Berhasil dihapus ')</script>";
		echo '<script type="text/javascript">window.location="resepsionis.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="resepsionis.php"</script>'; 
	}

?>