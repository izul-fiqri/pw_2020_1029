<?php
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data
// yang berbeda


//membuat array
//cara lama
$hari = array("Senin", "Selasa", "Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// echo $hari;
//menampilkan array dengan print_r dan var dump()
// print_r($hari);
// echo "<br>";
// var_dump($hari);

// var_dump($hari);
// print_r($bulan);

// // menampilkan 1 lemen pada array
// print_r($hari[0]);
// echo "<br>";
// echo $hari[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
