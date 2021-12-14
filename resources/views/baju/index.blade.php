@extends('layout.happy')
@section('css')
    <link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Baju')

@section('konten')

    <!DOCTYPE html>
    <html>

    <head>

        <style>
            h2 {
                text-align: center;
                margin: 30px;

            }

            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 25px
            }

            table,
            th,
            td {
                border-bottom: 1px solid rgb(255, 255, 255);
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                background-color: #2d3877;
                color: white;
                padding: 10px;
            }

            td {

                text-align: center;
                padding: 10px;
            }

            tr:nth-child(even) {
                background-color: #e2e2e2;
            }

        </style>

    </head>

    <body>

        <style type="text/css">
            .pagination li {
                float: left;
                list-style-type: none;
            }

        </style>


        <h2>Data Baju</h2>

        <a href="/baju/tambah" style="background-color: #2e3757; border: none; color: white; padding: 12px 25px; text-align:
        center; text-decoration: none; display: inline-block; font-size: 10px;
        border-radius: 4px;"> + Tambah Data Baju Baru</a>

        <br />
        <br />

        <div class="container" style="padding: 2px">
            <p style="font-family:Arial, Helvetica, sans-serif">Cari Data Baju :</p>
            <form action="/baju/cari" method="GET">
                <input class="form-control" type="text" name="cari" style="width: 25%" placeholder="Cari Baju"
                    value="{{ old('cari') }}">
                <input class="form-control btn-warning" style="width: 8%;margin-top: 5px" type="submit" value="CARI">
            </form>

        </div>

        <table class="table table-light table-bordered">
            <tr class="table table-light table-bordered">

                <table>
                    <tr>
                        <th>No</th>
                        <th>Merk Baju</th>
                        <th>Stock Baju</th>
                        <th>Tersedia</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($baju as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->merkbaju }}</td>
                            <td>{{ $b->stockbaju }}</td>
                            <td>{{ $b->tersedia }}</td>
                            <td>
                                <a href="/baju/detail/{{ $b->kodebaju }}" class="btn btn-info btn-sm"
                                    role="button">View Detail</a>

                                <a href="/baju/edit/{{ $b->kodebaju }}" class="btn btn-warning btn-sm"
                                    role="button">Edit</a>
                                |
                                <a href="/baju/hapus/{{ $b->kodebaju }}" class="btn btn-danger btn-sm"
                                    role="button">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{ $baju->links() }}

    </body>

    </html>
@endsection
