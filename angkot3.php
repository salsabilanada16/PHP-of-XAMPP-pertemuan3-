<?php
    // Ini penggabungan antara pengulangan dan pengkodisian
    
    for($no_angkot = 1; $no_angkot <= 10; $no_angkot++) {
        if($no_angkot <= 6) {
            echo "Angkot No. $no_angkot beroperasi dengan baik. <br>";
        } else {
            echo "Angkot No. $no_angkot sedang tidak beroperasi. <br>";
        }
    }
?>