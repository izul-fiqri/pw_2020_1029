<?php
//pengulangan pada array
//for / foreach
$angka = [1, 2, 3, 10, 20, 40, 50, 60, 70];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengulangan pada array</title>
  <style>
    div {
      width: 50px;
      height: 50px;
      background-color: aqua;
      text-align: center;
      margin: 3px;
      float: left;
    }
  </style>
</head>

<body>
  <!-- dengan for biasa -->
  <!-- <?php for ($i = 0; $i < count($angka); $i++) :
        ?>
    <div><?= $angka[$i]; ?></div>
  <?php endfor; ?> -->

  <?php foreach ($angka as $key) : ?>
    <div><?= $key; ?></div>
  <?php endforeach; ?>
</body>

</html>