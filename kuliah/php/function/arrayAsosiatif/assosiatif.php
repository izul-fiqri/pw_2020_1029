<?php
$mahasiswa = [
  [
    "nama" => "Moh. Izul Fiqri",
    "nim" => "162410101029",
    "jurusan" => "Sistem Informasi",
    "email" => "izulfiqri98@gmail.com"
  ],
  [
    "nama" => "Moh. Ali",
    "nim" => "162410101067",
    "jurusan" => "Teknik Industri",
    "email" => "ali@gmail.com"
  ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <li>Nama:<?= $mhs["nama"]; ?></li>
    <li>NIM:<?= $mhs["nim"]; ?></li>
    <li>Jurusan:<?= $mhs["jurusan"]; ?></li>
    <li>Email:<?= $mhs["email"]; ?></li>
    <br>
  <?php endforeach; ?>
  </ul>
</body>

</html>