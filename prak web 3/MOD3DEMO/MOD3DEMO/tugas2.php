<?php
echo "<pre>";  // Menggunakan tag pre untuk mempertahankan format

function cekBilangan($n) {
    // Loop dari 1 sampai n
    for ($i = 1; $i <= $n; $i++) {
        // Cek kondisi sesuai ketentuan
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024\n";
        }
        else if ($i % 5 == 0) {
            echo "2024\n";
        }
        else if ($i % 4 == 0 && $i % 6 != 0) {
            echo "Pemrograman\n";
        }
        else if ($i % 6 == 0 && $i % 4 != 0) {
            echo "Website\n";
        }
        else {
            echo $i . "\n";
        }
    }
}

// Memanggil fungsi dengan input n = 25
cekBilangan(25);

echo "</pre>";
?>