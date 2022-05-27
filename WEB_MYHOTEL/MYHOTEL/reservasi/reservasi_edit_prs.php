<?php
include 'koneksi.php';

$kode_reservasi 	= $_POST['kode_reservasi'];
$tgl_masuk 			= $_POST['tgl_masuk'];
$tgl_keluar 		= $_POST['tgl_keluar'];
$tarif				= $_POST['tarif'];
$id_KTP 			= $_POST['id_KTP'];
$nomor_kamar 			= $_POST['nomor_kamar'];
$id_resepsionis 	= $_POST['id_resepsionis'];
$id_fasilitas		= $_POST['id_fasilitas'];

$simpan = mysql_query("UPDATE reservasi SET kode_reservasi='$kode_reservasi',
tgl_masuk='$tgl_masuk',tgl_keluar='$tgl_keluar',tarif='$tarif',id_KTP='$id_KTP',
nomor_kamar='$nomor_kamar',id_resepsionis='$id_resepsionis',id_fasilitas='$id_fasilitas' WHERE id_KTP='$id_KTP'") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="reservasi.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="reservasi_tambah.php"</script>'; 
	}

?>