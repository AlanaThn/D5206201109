@extends('layout.happy')
@section('css')
    <link rel="stylesheet" href="/css/container.css">
@endsection
@section('title', 'Data Absen')

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

        <h2>Data Absen</h2>

        <a href="/absen/tambah" style="background-color: #2e3757; border: none; color: white; padding: 12px 25px; text-align:
        center; text-decoration: none; display: inline-block; font-size: 10px;
        border-radius: 4px;"> + Tambah Absen Baru</a>

        <br />
        <br />

        <table class="table table-light table-bordered">
            <tr class="table table-light table-bordered">

                <table>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($absen as $a)
                        <tr>
                            <td>{{ $a->pegawai_nama }}</td>
                            <td>{{ $a->Tanggal }}</td>
                            <td>{{ $a->Status }}</td>
                            <td>
                                <a href="/absen/edit/{{ $a->ID }}" class="btn btn-Success btn-sm"
                                    role="button">Edit</a>
                                |
                                <a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger btn-sm"
                                    role="button">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{ $absen->links() }}
            </tr>
            </table>

    </body>

    </html>
@endsection
