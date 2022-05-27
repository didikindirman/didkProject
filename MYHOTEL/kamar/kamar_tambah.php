<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
	<form action="kamar_tambah_prs.php" method="POST">
		<label>nomor_kamar</label>
		<input type="text" name="nomor_kamar" placeholder="..nomor_kamar.." required><br> 		
		<label>tipe_kamar</label>
		<input type="text" name="tipe_kamar" placeholder="..tipe_kamar.." required> <br> 
		<label>id_fasilitas</label>
		<input type="text" name="id_fasilitas" placeholder="..id_fasilitas.." required> <br> 
		<label>tarif</label>
		<input type="text" name="tarif" placeholder="..tarif.." required> <br> 
		<input type="submit" value="Simpan">
	</form>
<a href="kamar.php">Kembali</a>
</body>
</html>