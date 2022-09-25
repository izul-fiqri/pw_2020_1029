var a = 10
var b = 11
var hasil = a + b;

// alert('tidak boleh kosong ' + hasil);
// alert('izul');
// alert('nama');
// var nama = prompt('masukkan nama');
// alert(nama);
// var tes = confirm('kamu yakin??');

// if (tes == true) {
//   alert('kamu baik');
// } else {
//   alert('kamu jahat');
// }
// alert('selamat datang');

// var lagi = true;
// while (lagi == true) {
//   alert('kamu jahat');
// }

// // belajar pengkondisian
// var a = prompt('masukkan angka 1: ');

// var b = prompt('masukkan angka 2: ');

// if (a > b) {
//   console.log('kamu pintar');
// } else {
//   console.log('kamu bodoh');
// }
// belajar pengulangan while
// var nilaiAwal = 1;
// while (nilaiAwal <= 5) {
//   console.log('hello World!');
//   nilaiAwal++;
//

// for (let index = 1; index < 10; index++) {
//   console.log('hello world');

// }
// var angka = prompt('masukkan angka: ');
// if (angka % 2 == 0) {
//   alert(angka + ' adalah bilangan genap');
// } else {
//   alert(angka + ' adalah bilangan ganjil');
// }

// pengulangan dan pengkodisian
// var jmlAngkot = 10;
// var angkotBeroperasi = 6;

// for (var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
//   if (noAngkot <= angkotBeroperasi) {
//     console.log('Angkot ' + noAngkot + ' beroperasi dengan baik');

//   } else {
//     console.log('Angkot ' + noAngkot + ' sedang rusak');

//   }
var angka = prompt('masukkan angka : ');
if (angka % 2 == 1) {
  alert(angka + 'adalah bilangan ganjil');
} else if (angka % 2 == 0) {
  alert(angka + 'adalah bilangan genap');
} else {
  alert(angka + 'bukan angka');
}