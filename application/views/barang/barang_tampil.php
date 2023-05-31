<!DOCTYPE html>
<html>
<head>
	<title>Daftar Barang</title>
</head>
<body>
	<head><h1>Daftar Barang</h1></head>
	<a href="<?php echo base_url('barang/barang_tambah') ?>">Tambah Barang</a>
	<table border="1" >
		<tr>
			<td>No</td><td>Kode Barang</td><td>Nama Barang</td><td>Harga</td><td>Jumlah</td><td>Aksi</td>
		</tr>
		<?php $no=1;
		foreach ($barang as $key => $value) { ?>		
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $value->kodebarang ?></td>
				<td><?php echo $value->namabarang ?></td>
				<td><?php echo $value->harga ?></td>
				<td><?php echo $value->jumlah ?></td>
				<td><a href="<?php echo base_url('barang/barang_edit/'.$value->kodebarang)?>">Edit</a> | <a href="<?php echo base_url('barang/barang_hapus/'.$value->kodebarang)?>">Hapus</a></td>
			</tr>
			
		<?php } ?>
	</table>

</body>
</html>