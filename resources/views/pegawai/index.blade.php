@extends('layout.happy')
@section('css')
    <link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Pegawai')


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

        <h2>Data Pegawai</h2>

        <a href="/pegawai/tambah" style="background-color: #2e3757; border: none; color: white; padding: 12px 25px; text-align:
                    center; text-decoration: none; display: inline-block; font-size: 10px;
                    border-radius: 4px;"> + Tambah Pegawai Baru</a>

        <br />
        <br />

        <div class="container" style="padding: 2px">
            <p style="font-family:Arial, Helvetica, sans-serif">Cari Data Pegawai :</p>
            <form action="/pegawai/cari" method="GET">
                <input class="form-control" type="text" name="cari" style="width: 25%" placeholder="Cari Pegawai .."
                    value="{{ old('cari') }}">
                <input class="form-control btn-warning" style="width: 8%;margin-top: 5px" type="submit" value="CARI">
            </form>

        </div>

        <table class="table table-light table-bordered">
            <tr class="table table-light table-bordered">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($pegawai as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->pegawai_nama }}</td>
                            <td>{{ $p->pegawai_alamat }}</td>
                            <td>
                                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-info btn-sm"
                                    role="button">View Detail</a>

                                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm"
                                    role="button">Edit</a>
                                |
                                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm"
                                    role="button">Hapus</a>


                            </td>
                        </tr>
                    @endforeach
                </table>


                {{ $pegawai->links() }}


    </body>

    </html>
@endsection
