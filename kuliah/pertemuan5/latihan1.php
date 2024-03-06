<?php
// 1. Membuat Arrar
$hari = array ("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$mhs = ["hilmi", 3.2, false];
// 2. Memcetak Arrar (1)
// cetak 1 nilai menggunakan index
echo $hari [0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";
// var_dump() atau print_r()
// digunakan untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mhs);
echo "<hr>";
// 3. Manipulasi Arrar (1)
// menambah isi Array
// Di akhir : [] atau array_push()
$hari[] = "Kamis";
print_r($hari);
echo "<br>";
array_push($bulan, "April");
print_r($bulan);
echo "<hr>";
// di awal array : array_unshift
array_unshift($mhs, "233040047");
print_r($mhs);
echo "<hr>";
// menghapus isi array
// dibelakang : array_pop()
// didepan : array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);

// 4. Memcetak Arrar (2)
?>