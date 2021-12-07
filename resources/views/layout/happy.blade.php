<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>
body{
    padding: 50px;
    margin: 10px;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(8, 0, 116);
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 20px;
  font-family: Verdana;
  color: #ffffff;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 15px;}
}
    </style>

<div class="main">
<div class="container">
    <img src="https://zedemy.com/wp-content/uploads/avatars/1665/61319398a4ebc-bpthumb.jpg"
    class="rounded" alt="Mahasiswa" class="mx-auto d-block">
    <p style="font-family:verdana;"> 5026201109 </p>
    <p style="font-family:verdana;"> Alana Nabihah Thufailah </p>
</div>
</div>

</head>

<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="http://127.0.0.1:8000/pegawai">Pegawai</a>
        <a href="http://127.0.0.1:8000/absen">Absen</a>
        <a href="#">[PR]</a>
        <a href="#">Minggu Depan</a>
        <a href="#">Praktikum</a>
      </div>

      <div class="main">
        @yield('judulhalaman')<br>
        @section('konten')
        @show
      </div>

<footer>
    <div class="main">
        <div class="container">
    <p style="font-family:verdana;"> Hak cipta oleh 5026201109 - Alana Nabihah Thufailah </p>
</div>
</div>
</footer>
</body>

</html>
