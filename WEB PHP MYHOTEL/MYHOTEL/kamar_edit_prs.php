<?php
include 'koneksi.php';

$nomor_kamar 	= $_POST['nomor_kamar'];
$tipe_kamar		= $_POST['tipe_kamar'];
$id_fasilitas	= $_POST['id_fasilitas'];
$tarif			= $_POST['tarif'];
	
$simpan = mysql_query("UPDATE kamar SET nomor_kamar='$nomor_kamar',tipe_kamar='$tipe_kamar',
id_fasilitas='$id_fasilitas',tarif='$tarif' WHERE nomor_kamar='$nomor_kamar'") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="kamar.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="kamar_tambah.php"</script>'; 
	}

?>