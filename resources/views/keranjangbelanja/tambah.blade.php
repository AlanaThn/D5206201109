<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<h3>Tambah ke Keranjang</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
		Kode Barang <input type="number" name="kode" required="required"> <br/>
		Jumlah Pembelian <input type="number" name="jumlah" required="required"> <br/>
        Harga Barang <input type="number" name="harga" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
