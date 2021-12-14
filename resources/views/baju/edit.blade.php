@extends('layout.happy')
@section('css')
    <link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Baju')

@section('konten')

<style>
    input[type=text], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=number], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    </style>

<body>

    <a href="/baju" style="margin-left:15px;" class="btn btn-info btn-sm " role="button"> Kembali</a>


    <br>
    <h3 style="margin-left:10px;">Edit Data Baju</h3>
    <br>

    <div class="container">
        @foreach ($baju as $b)
            <form action="/baju/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="kodebaju" value="{{ $b->kodebaju }}">

                <div class="form-group">
                    <label for="merk">Merk Baju :</label>
                    <input type="text" class="form-control" required="required" name="merk" value="{{ $b->merkbaju }}">

                </div>
                <div class="form-group">
                    <label for="merk">Stock Baju :</label>
                   <input type="number" class="form-control" required="required" name="stock" value="{{ $b->stockbaju }}"> <br />

                </div>

                <div class="form-group">
                    <label for="status">Status :</label>
                <input type="radio" id="ada" name="status" value="A @if ($b->tersedia === 'H') checked="checked" @endif>
            <label for=" ada">AVAILABLE</label>
                <input type="radio" id="habis" name="status" value="E" @if ($b->tersedia === 'A') checked="checked" @endif>
                <label for="habis">EMPTY</label>
            </div>

            <br>
            <br>

                <input type="submit" value="Simpan Data" class="btn btn-success btn-sm " role="button">
            </form>
    </div>
    @endforeach

</body>
@endsection
