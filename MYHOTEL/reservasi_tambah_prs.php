<?php
include 'koneksi.php';

$kode_reservasi 	= $_POST['kode_reservasi'];
$tgl_masuk 			= $_POST['tgl_masuk'];
$tgl_keluar 		= $_POST['tgl_keluar'];
$tarif				= $_POST['tarif'];
$id_KTP 			= $_POST['id_KTP'];
$nomor_kamar 		= $_POST['nomor_kamar'];
$id_resepsionis 	= $_POST['id_resepsionis'];
$id_fasilitas		= $_POST['id_fasilitas'];

$simpan = mysql_query("INSERT INTO reservasi VALUES('$kode_reservasi','$tgl_masuk','$tgl_keluar','$tarif',
'$id_KTP','$nomor_kamar','$id_resepsionis','$id_fasilitas')") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="reservasi.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="reservasi.php"</script>'; 
	}

?>