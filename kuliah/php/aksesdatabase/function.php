<?php
$con = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
  global $con;
  $result = mysqli_query($con, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $con;
  $nama = htmlspecialchars($data["nama"]);
  $nim = htmlspecialchars($data["nim"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $email = htmlspecialchars($data["email"]);
  $query = "INSERT INTO mahasiswa VALUES
  ('', '$nama', '$nim', '$jurusan', '$email')";

  mysqli_query($con, $query);
  return mysqli_affected_rows($con);
}

function hapus($id)
{
  global $con;
  $query =
    "DELETE FROM mahasiswa WHERE id= $id";
  mysqli_query($con, $query);
  return mysqli_affected_rows($con);
}
