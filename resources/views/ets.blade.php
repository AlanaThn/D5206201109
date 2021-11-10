<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pendaftaran Kuota Internet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <style>
        p {
            margin-top: 10px;
            font-size: 12px;
            font-weight: bold;
        }

        label {
            font-size: 14px;
        }

        input[type=button],
        input[type=submit] {
            width: 100%;
            background-color: #182988;
            border: none;
            color: white;
            padding: 10px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
            margin-bottom: 20px;
        }

        input[type=button],
        input[type=reset] {
            width: 100%;
            background-color: #bb2b2b;
            border: none;
            color: white;
            padding: 10px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>

    <div class="mx-auto" style="width:500px">

        <div class="container" style="border-style: solid; border-width: 2px;">

            <div class="container" style="text-align: left">
                <p>Alana Nabihah Thufailah
                    <br>
                    Alana
                    <br>
                    5026201109
                </p>
            </div>

            <div class="container" style="text-align: center">

                <h4>Form Pendaftaran Kuota Internet</h4>
            </div>

            <div class="container" style="text-align: justify">
                <form action="https://youtu.be/H9aC5AGY9YU" class="needs-validation" novalidate>

                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa:</label>
                        <input type="text" placeholder="Isi nama mahasiswa" id="nama" name="nama" class="form-control"
                            pattern="[A-Za-z\s]{2,}" minlength="2" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Isi nama mahasiswa</div>
                    </div>

                    <div class="form-group">
                        <label for="nrp">NRP Mahasiswa:</label>
                        <input type="text" placeholder="Isi NRP mahasiswa" id="nrp" name="nrp" minlength="10"
                            maxlength="10" size="10" pattern="[0-9\d]{10}" class="form-control" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Isi NRP mahasiswa.</div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <select id="jurusan" name="jurusan" class="form-control" required>
                            <option value=""></option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                        </select>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Pilih Jurusan</div>
                    </div>

                    <div class="form-group">
                        <label for="nohp">Nomor Handphone:</label>
                        <input type="tel" placeholder="Isi nomor handphone" id="nohp" name="nohp" pattern="[0-9]{10,}"
                            minlength="10" class="form-control" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Isi nomor handphone</div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <input type="submit" value="Submit">

                            </div>
                            <div class="col">

                                <input type="reset">

                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>

</body>

</html>
