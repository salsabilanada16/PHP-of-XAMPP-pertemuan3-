<?php
    // Angkot No. 1-6 beroperasi dengan baik. Angkot No. 7-10 sedang tidak beroperasi. Tapi Angkot No. 8 sedang lembur
    
for($no_angkot = 1; $no_angkot <= 10; $no_angkot++) {
    if($no_angkot <= 6) {
        echo "Angkot No. $no_angkot beroperasi dengan baik. <br>";
    } else if($no_angkot == 8) {                                
        echo "Angkot No. $no_angkot sedang lembur. <br>";
    } else {
        echo "Angkot No. $no_angkot sedang tidak beroperasi. <br>";
    }
}
?>