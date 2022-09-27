<?php
require 'function.php';

$data = query("SELECT * FROM mahasiswa");
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
  <a href="tambah.php">Tambah Data</a>
  <table border="0" cellspasing="0" cellpadding="20">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($data as $mhs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td>
          <a href="">edit</a>
          <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <?php $i++; ?>
      <?php endforeach; ?>
      </tr>
  </table>
</body>

</html>