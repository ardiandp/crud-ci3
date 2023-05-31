<!DOCTYPE html>
<html>
<head>
	<title>Edit Barang</title>
</head>
<body>
	<form method="post" action="<?php echo base_url('index.php/barang/barang_simpan') ?>">
	<h3>Edit Data Barang</h3>
	<table border="1">
		<tr>
			<td>Kode Barang</td><td><input type="text" readonly name="kodebarang" value="<?php echo $edit['kodebarang'] ?>"></td>
		</tr>
		<tr>
			<td>Nama Barang</td><td><input type="text" name="namabarang" value="<?php echo $edit['namabarang']?>"></td>
		</tr>
		<tr>
			<td>Harga</td><td><input type="text" name="harga" value="<?php echo $edit['harga']?> " ></td>
		</tr>
		<tr>
			<td>Jumlah</td><td><input type="text" name="jumlah" value="<?php echo $edit['jumlah']?>" ?></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan" value="Simpan Data"></td><td><input type="reset" name="reset" value="Batal Simpan"></td>
		</tr>
	</table>		
	</form>
</body>
</html>