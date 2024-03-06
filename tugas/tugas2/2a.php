<?php

$nama_depan = "muhammad";
$nama_belakang = "hilmy";

for ($i = 1; $i <= 100; $i++) {
    echo "<br>";
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$nama_depan  $nama_belakang ";
    } elseif ($i % 3 == 0) {
        echo "$nama_depan ";
    } elseif ($i % 5 == 0) {
        echo " $nama_belakang ";
    } else {
        echo $i;
    }
}
?>

