<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<p> Selamat Datang di Web MYHOTEL </p>
	<form action="tamu_tambah_prs.php" method="POST">
		<label>id_KTP</label>
		<input type="text" name="id_KTP" placeholder="..id_KTP.." required><br> 		
		<label>nama</label>
		<input type="text" name="nama" placeholder="..nama.." required> <br> 
		<label>alamat</label>
		<input type="text" name="alamat" placeholder="..alamat.." required> <br> 
		<label>no_telepon</label>
		<input type="text" name="no_telepon" placeholder="..no_telepon.." required> <br> 
		<input type="submit" value="Simpan">
	</form>
<a href="tamu.php">Kembali</a>
</body>
</html>