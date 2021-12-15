<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<h3>Keranjang Belanja</h3>

	<a href="/keranjangbelanja/tambah">Beli</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
            <th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td><?php echo "Rp. ".number_format($k->Harga)." ,-"; ?></td>
            <td><?php echo "Rp. ".number_format($k->Jumlah*$k->Harga)." ,-"; ?></td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $k->ID }}">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
