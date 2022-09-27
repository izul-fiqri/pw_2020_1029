<?php
if (
  !isset($_GET["nama"]) ||
  !isset($_GET["nip"]) ||
  !isset($_GET["jurusan"]) ||
  !isset($_GET["email"])
) {
  header("Location: Latihan2.php");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h1>Detail Mahasiswa</h1>
  <ul>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nip"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["email"]; ?></li>

  </ul>
  <a href="latihan2.php">Kembali ke daftar mahasiswa</a>
</body>

</html>