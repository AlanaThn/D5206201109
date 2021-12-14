@extends('layout.happy')

@section('title', 'Data Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    <div class="container">
		<label class="col-md-2 col-sm-4 control-label">Nama Pegawai : {{ $p->pegawai_nama }}</label>
         <br/>
         <label class="col-md-2 col-sm-4 control-label">Jabatan Pegawai : {{ $p->pegawai_jabatan }}</label>
        <br/>
		<label class="col-md-2 col-sm-4 control-label">Umur Pegawai : {{ $p->pegawai_umur }}</label>
        <br/>
		<label class="col-md-2 col-sm-4 control-label">Alamat Pegawai : {{ $p->pegawai_alamat }}</label>
        <br/>
    </div>
	@endforeach


</body>
</html>
@endsection
