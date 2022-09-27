<?php
require 'function.php';
// require 'index.php';

//cek apakah tombol submit udah ditekan belum
if (isset($_POST["submit"])) {
  //cek apakah data berhasil di tambah atau tidak
  if (tambah($_POST) > 0) {
    echo "<script>
    alert ('data berhasil ditambahkan');
    document.location.href = 'index.php'
    </script>";
  } else {
    "<script>
    alert ('data gagal ditambahkan');
    document.location.href = 'index.php'
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h2>Tambah Data Mahasiswa</h2>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama:
          <input type="text" name="nama" id="nama" required>
        </label>
      </li>
      <li>
        <label>
          NIM:
          <input type="text" name="nim" id="nim" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan:
          <input type="text" name="jurusan" id="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Email:
          <input type="text" name="email" id="email" required>
        </label>
      </li>
    </ul>
    <button type="submit" name="submit">Simpan</button>
  </form>
</body>

</html>