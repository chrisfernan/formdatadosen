<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Form Penjadwalan Dosen</title>
  </head>
  
  <body>
  
  <div class="container border border-primary ">
  <div class="row align-items-start">

  <center>
  <h2>Form Inputan Data Penjadwalan Dosen</h2>
  <p >Selamat Datang di Program Penjadwalan Dosen</p>
  </center>

        <form action="hasil.php" method="post">

        <div class="row">
    <label for="Nama_Dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
    <div class="form-mb-20">
      <input type="text" class="form-control" id="Nama_Dosen" name="Nama_Dosen" >
    </div><br>

    <label for="Nip" class="col-sm-2 col-form-label">Nip</label>
    <div class="form-mb-20">
      <input type="text" class="form-control" id="Nip" name="Nip" >
    </div><br>

    <label for="Fakultas" class="col-sm-2 col-form-label">Fakultas</label>
    <div class="form-mb-20">
      <input type="text" class="form-control" id="Fakultas" name="Fakultas" >
    </div><br>

    <label for="Prodi" class="col-sm-2 col-form-label">Prodi</label>
    <div class="form-mb-20">
      <input type="text" class="form-control" id="Prodi" name="Prodi" >
    </div><br>

    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
    <div class="form-mb-1">
      <input type="text" class="form-control" id="kelas" name="Kelas" >
    </div><br>

    <label for="Jadwal" class="col-sm-2 col-form-label">Jadwal</label>
    <div class="form-mb-1">
      <input type="date" class="form-control" id="Jadwal" name="Jadwal" >
    </div><br>

    <label for="Matakuliah" class="col-sm-2 col-form-label">Matakuliah</label>
    <div class="form-mb-1">
      <input type="text" class="form-control" id="Matakuliah" name="Matakuliah" >
    </div><br>

    <div class="d-grid gap-2"><br>
  <button type="submit" class="btn btn-primary">Masukkan Data</button>
  </div><br>
        </div>
        </form>

  </body>
  </html>