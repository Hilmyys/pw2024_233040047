<?php
function cetak_angka($e) {
    for ($i = 1; $i <= $e; $i++) {
        for ($h = 1; $h <= $i; $h++) {
            echo $h ;
        }
        echo "<br>";
    }
}

echo cetak_angka(5);
echo "<hr>";
echo cetak_angka(10);

?>