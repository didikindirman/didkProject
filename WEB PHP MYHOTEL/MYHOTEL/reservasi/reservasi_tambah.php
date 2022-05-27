<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
	<form action="reservasi_tambah_prs.php" method="POST">
		<label>kode_reservasi</label>
		<input type="text" name="kode_reservasi" placeholder="..kode_reservasi.." required><br> 		
		<label>tgl_masuk</label>
		<input type="text" name="tgl_masuk" placeholder="..tgl_masuk.." required> <br> 
		<label>tgl_keluar</label>
		<input type="text" name="tgl_keluar" placeholder="..tgl_keluar.." required> <br> 
		<label>tarif</label>
		<input type="text" name="tarif" placeholder="..tarif.." required> <br> 
		<label>id_KTP</label>
		<input type="text" name="id_KTP" placeholder="..id_KTP.." required><br> 		
		<label>nomor_kamar</label>
		<input type="text" name="nomor_kamar" placeholder="..nomor_kamar.." required> <br> 
		<label>id_resepsionis</label>
		<input type="text" name="id_resepsionis" placeholder="..id_resepsionis.." required> <br> 
		<label>id_fasilitas</label>
		<input type="text" name="id_fasilitas" placeholder="..id_fasilitas.." required> <br> 
		<input type="submit" value="Simpan">
	</form>
<a href="reservasi.php">Kembali</a>
</body>
</html>