<?php
$r = 10;
$r2 = 20;

function menghitungluaslingkaran($r) {
    return 3.14 * $r * $r;
}
function mengkitungkelilinglingkaran($r2) {
    return 2 * 3.14  * $r2;
    }

echo "<h4>Menghitung Luas Lingkaran</h4>";
echo "<br>";
echo "jari-jari lingkaran= $r";
echo "<br>";
echo "Luas lingkaran=" . menghitungluaslingkaran($r) . "cm²";
echo "<br>";
echo "<hr>";
echo "<h4>Mengkitung Keliling Lingkaran </h4>";
echo "<br>";
echo "jari-jari lingkaran=$r2";
echo "<br>";
echo "Keliling Lingkaran=" . menghitungluaslingkaran($r2) . "cm²";
echo "<hr>";
?>