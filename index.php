<!DOCTYPE html>
<html>
<head>
	<title>Toko Makan</title>
</head>
<body>
 
	<h2>DAFTAR MENU</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MENU</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Id Barang</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Satuan Barang</th>
            <th>Stok Barang</th>
            <th>Harga Barang</th>

			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodeBarang']; ?></td>
				<td><?php echo $d['namaBarang']; ?></td>
				<td><?php echo $d['satuanBarang'];?></td>
                <td><?php echo $d['stokBarang']; ?></td>
				<td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?idBarang=<?php echo $d['idBarang']; ?>">EDIT</a>
					<a href="hapus.php?idBarang=<?php echo $d['idBarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>