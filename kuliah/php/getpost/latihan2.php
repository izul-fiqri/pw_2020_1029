<?php
//SUPERGLOBALS
//variabel global milik php
//merupakan array asssosiatif

$mahasiswa = [
  [
    "nama" => "Moh. Izul Fiqri",
    "nip" => "162410101029",
    "jurusan" => "Sistem Informasi",
    "email" => "izulfiqri98@gmail.com"
  ],
  [
    "nama" => "Moh. Ali",
    "nip" => "162410101089",
    "jurusan" => "Sistem Informasi",
    "email" => "ali98@gmail.com"
  ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><a href="latihan3.php?nama=<?= $mhs["nama"]; ?> & 
      nip=<?= $mhs["nip"]; ?>&
      jurusan=<?= $mhs["jurusan"]; ?>&
      email=<?= $mhs["email"]; ?>">
          <?= $mhs["nama"]; ?></a></li>

    </ul>
  <?php endforeach; ?>
</body>

</html>