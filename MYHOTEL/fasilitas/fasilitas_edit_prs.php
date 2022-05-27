<?php
include 'koneksi.php';

$id_fasilitas 		= $_POST['id_fasilitas'];
$nama_fasilitas		= $_POST['nama_fasilitas'];

$simpan = mysql_query("UPDATE fasilitas SET id_fasilitas='$id_fasilitas',
nama_fasilitas='$nama_fasilitas' WHERE id_fasilitas='$id_fasilitas'") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="fasilitas.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="fasilitas_tambah.php"</script>'; 
	}

?>