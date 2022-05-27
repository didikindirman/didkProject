<?php
include 'koneksi.php';

$id_KTP 	= $_POST['id_KTP'];
$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$no_telepon	= $_POST['no_telepon'];

$simpan = mysql_query("INSERT INTO tamu VALUES('$id_KTP','$nama','$alamat','$no_telepon')") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="tamu.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="tamu.php"</script>'; 
	}

?>