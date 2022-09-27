<?php
require 'function.php';

$data = query("SELECT * FROM mahasiswa");

//tombol cari ditekan
if (isset($_POST["cari"])) {
  $data = cari($_POST["keyword"]);
}
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
  <form action="" method="POST">
    <input type="text" name="keyword" autofocus placeholder="masukkan data yang ingin dicari" autocomplete="off">
    <button type="submit" name="cari">Search</button>
  </form>
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
          <a href="ubah.php?id=<?= $mhs["id"]; ?>">edit</a>
          <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <?php $i++; ?>
      <?php endforeach; ?>
      </tr>
  </table>
</body>

</html>