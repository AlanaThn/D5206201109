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
 h3 {

                margin: 15px;

            }

            body {
                font-family: Arial, Helvetica, sans-serif;

            }

            table,
            th,
            td {
                border-bottom: 1px solid rgb(255, 255, 255);
            }

            table {
                border-collapse: collapse;

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

    <br />
    <h3>Detail Data Baju</h3>

    <div class="container">
        <table class="table table-light table-bordered">
            <tr class="table table-light table-bordered">

                <table>
                    <tr>
                        <th>Merk Baju</th>
                        <th>Stock Baju</th>
                        <th>Status</th>
                    </tr>

                    @foreach ($baju as $b)

                        <tr>
                            <td>{{ $b->merkbaju }}</td>
                            <td>{{ $b->stockbaju }}</td>
                            <td>{{ $b->tersedia }}</td>
                        </tr>

                    @endforeach
                </table>
            </tr>
        </table>
    </div>

    <a href="/baju" style="margin-top:50px;margin-left:10px;" class="btn btn-info btn-sm " role="button"> Kembali</a>

</body>

@endsection
