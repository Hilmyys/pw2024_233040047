<?php
function urutanAngka($angka) {
    for ($i = 1; $i <= $angka; $i++) {
        for ($h = 1; $h <= $i; $h++) {
            echo $h ;
        }
        echo "<br>";
    }
}

echo urutanAngka(5);