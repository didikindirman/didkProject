<?php
include 'koneksi.php';

$id_resepsionis		 	= $_POST['id_resepsionis'];
$nama_resepsionis 		= $_POST['nama_resepsionis'];

$simpan = mysql_query("UPDATE resepsionis SET id_resepsionis='$id_resepsionis',
nama_resepsionis='$nama_resepsionis' WHERE id_resepsionis='$id_resepsionis'") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="resepsionis.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="resepsionis_tambah.php"</script>'; 
	}

?>