<?php
require 'function.php';
// require 'index.php';
$id = $_GET["id"];
//ambil data dari database
$data = query("SELECT * FROM mahasiswa
WHERE id =$id")[0];
//cek apakah tombol submit udah ditekan belum
if (isset($_POST["submit"])) {
  //cek apakah data berhasil di ubah atau tidak
  if (ubah($_POST) > 0) {
    echo "<script>
    alert ('data berhasil diubah');
    document.location.href = 'index.php'
    </script>";
  } else {
    "<script>
    alert ('data gagal diubah');
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
  <title>ubah Data Mahasiswa</title>
</head>

<body>
  <h2>Ubah Mahasiswa</h2>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
    <ul>

      <li>
        <label>
          Nama:
          <input type="text" name="nama" id="nama" value="<?= $data["nama"]; ?>" required>
        </label>
      </li>
      <li>
        <label>
          NIM:
          <input type="text" name="nim" id="nim" value="<?= $data["nim"]; ?>" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan:
          <input type="text" name="jurusan" id="jurusan" value="<?= $data["jurusan"]; ?>" required>
        </label>
      </li>
      <li>
        <label>
          Email:
          <input type="text" name="email" id="email" value="<?= $data["email"]; ?>" required>
        </label>
      </li>
    </ul>
    <button type="submit" name="submit">Ubah</button>
  </form>
</body>

</html>