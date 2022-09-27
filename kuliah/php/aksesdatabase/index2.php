<?php

//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
if (!$result) {
  echo mysqli_error($conn);
}
//ambil data mahasiswa dari object result
//mysqli_fetch_row()  => mengembalikan array numerik
//mysqli_fetch_assoc() =>mengembalikan array asosiatif
//mysqli_fetch_array() =>mengembalikan array campuran
//mysqli_fetch_object() 

// while ($data = mysqli_fetch_assoc($result)) {
//   var_dump($data["nama"]);
// }
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
  <table border="1" cellspasing="0" cellpadding="20">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td>
          <a href="">edit</a>
          <a href="">hapus</a>
        </td>
        <?php $i++; ?>
      <?php endwhile; ?>
      </tr>
  </table>
</body>

</html>