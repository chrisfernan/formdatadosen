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
    <h1>Penjadwalan Dosen</h1>
    <?php
        $Nama_Dosen = $_POST["Nama_Dosen"];
        $Nip = $_POST["Nip"];
        $Fakultas = $_POST["Fakultas"];
        $Prodi = $_POST["Prodi"];
        $Kelas = $_POST["Kelas"];
        $Jadwal = $_POST["Jadwal"];
        $Matakuliah = $_POST["Matakuliah"];

        include "koneksidatabase.php";

        $sqldosen = "INSERT INTO dosen(nip_dosen,nama_dosen,prodi,fakultas) values('".$Nip."','".$Nama_Dosen."','".$Prodi."','".$Fakultas."')";
        $sqljadwalkelas = "INSERT INTO jadwalkelas(jadwal,mata_kuliah) values('".$Jadwal."','".$Matakuliah."')";
        $sqlkelas = "INSERT INTO kelas(nama_kelas,prodi,fakultas) values('".$Kelas."','".$Prodi."','".$Fakultas."')";

        if(mysqli_query($conn, $sqldosen)){
          echo "Berhasil Menyimpan Data";
        } else{
          echo "Gagal Menyimpan data";
        }

        if(mysqli_query($conn, $sqljadwalkelas)){
          echo "Berhasil Menyimpan Data";
        } else{
          echo "Gagal Menyimpan data";
        }

        if(mysqli_query($conn, $sqlkelas)){
          echo "Berhasil Menyimpan Data";
        } else{
          echo "Gagal Menyimpan data";
        }
    ?>
    <br>
 <div class="container border border-primary">
     <br>

<center>

<h2>Data Jadwal Dosen</h2>


</center>
     <table class="table">
         <tr>
             <td class="col-sm-2">Nama Dosen</td>
             <td class="col-sm-4">: <?php echo "$Nama_Dosen"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Nip</td>
             <td class="col-sm-4">: <?php echo "$Nip"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Fakultas</td>
             <td class="col-sm-4">: <?php echo "$Fakultas"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Prodi</td>
             <td class="col-sm-4">: <?php echo "$Prodi"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Kelas</td>
             <td class="col-sm-4">: <?php echo "$Kelas"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Jadwal</td>
             <td class="col-sm-4">: <?php echo "$Jadwal"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Matakuliah</td>
             <td class="col-sm-4">: <?php echo "$Matakuliah"; ?></td>
         </tr>
         </table>
     <div class="mb-3">
         <button class="btn btn-primary" type="button">
             <a class="text-decoration-none text-light" href="input.php">Kembali</a>
         </button>
     </div>

     <br>
    </body>
  </html>