<?php
$mahasiswa = [
  ["Moh. Izul Fiqri", "162410101029", "Sistem Informasi", "izulfiqri98@gmail.com"],
  ["Moh. Fendi", "162410101027", "Sistem Informasi", "izulfiqri98@gmail.com"]
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
  <!-- <ul>
    <li><?= $mahasiswa[0]; ?></li>
    <li><?= $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?= $mahasiswa[3]; ?></li>
  </ul> -->
  <!-- <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?= $mhs; ?></li>

    <?php endforeach; ?>
  </ul> -->
  <ul>


    <?php foreach ($mahasiswa as $mhs) : ?>
      <li>Nama:<?= $mhs[0]; ?></li>
      <li>NIM:<?= $mhs[1]; ?></li>
      <li>Jurusan:<?= $mhs[2]; ?></li>
      <li>Email:<?= $mhs[3]; ?></li>
      <br>
    <?php endforeach; ?>
  </ul>
</body>

</html>