@extends('layout.happy')
@section('css')
<link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Baju')

@section('konten')
    <a href="/baju"> Kembali</a>

    <br />
    <br />

    <form action="/baju/store" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="row">

                <div class='col-lg-9'>
                    <div class="form-group">
                        Merk Baju <input type="text" name="merk" required="required">
                    </div>
                </div>

                <div class='col-lg-9'>
                    <div class="form-group">
                        Stock Baju <input type="number" name="stock" required="required">
                    </div>
                </div>

            </div>

        Tersedia
        <input type="radio" id="ada" name="status" value="A">
        <label for="ada">AVAILABLE</label><br>
        <input type="radio" id="habis" name="status" value="E" checked="checked">
        <label for="habis">EMPTY</label><br>
        <input type="submit" value="Simpan Data">
    </form>
@endsection

