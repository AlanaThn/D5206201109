@extends('layout.happy')

@section('title', 'Data Baju')
@section('judulhalaman', 'EDIT DATA BAJU')

@section('konten')

<a href="/baju"> Kembali</a>

<br/>
<h3>Edit Data Baju</h3>
<br/>

	@foreach($baju as $b)
	<form action="/baju/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodebaju" value="{{ $b->kodebaju }}">

        <div class="container">

		Merk Baju <input type="text" required="required" name="merk" value="{{ $b->merkbaju }}"> <br/>
		Stock Baju <input type="number" required="required" name="stock" value="{{ $b->stockbaju }}"> <br/>

        </div>

        Status
        <input type="radio" id="ada" name="status" value="A @if($b->tersedia==='H') checked="checked" @endif>
        <label for="ada">AVAILABLE</label><br>
        <input type="radio" id="habis" name="status" value="E" @if($b->tersedia==='A') checked="checked" @endif>
        <label for="habis">EMPTY</label><br>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection
