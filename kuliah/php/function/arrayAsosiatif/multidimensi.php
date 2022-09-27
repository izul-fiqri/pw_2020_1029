<?php
//pengulangan pada array
//for / foreach
$angka = [
  [1, 2, 3],
  [20, 40, 50],
  [2, 3, 9]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengulangan pada array</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: aqua;
      text-align: center;
      margin: 3px;
      float: left;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>

  <?php foreach ($angka as $key) : ?>
    <?php foreach ($key as $b) : ?>
      <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
  <?php endforeach; ?>
</body>

</html>