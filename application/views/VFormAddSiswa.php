<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Siswa</title>
</head>
<body>

	<form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
	NIS<input type="text" name="nis"><br>
	Nama<input type="text" name="nama"><br>
	Alamat<input type="text" name="alamat"><br>
	<input type="submit" name="simpan" value="Simpan">
	</form>

</body>
</html>