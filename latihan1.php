<?php
    // Pengulangan
    // while                                            // kalau while dia teracak, jadi kurang satu saja misal kurang nilai awal maka error   

    $i = 1;                                             // nilai awalnya satu
    while($i <= 5) {                                    // ketika nilai awal <= 5 maka mencetak 'Hello World!'
        // echo 'Hello World ' . $i . ' kali! <br>';    // jika ingin mencetak hello world tapi ada angka yang berubah maka $i dipecah dulu jadi gitu atau pake cara di bawah
        echo "Hello World $i Kali! <br>";               // jika memakai titik dua lebih bagus karena dia bisa membaca variabel        
        $i++;                                           // nilai awal tadi ditambah 1                              
    }
    echo 'Selesai <br> <br>';                           // jika sudah false maka mencetak 'Selesai'


    $i = 10;                                            // nilai awalnya 10. Ini namanya "nilai awal"
    while($i >= 1) {                                    // ini namanya "kondisi terminasi"
        echo "Hello World $i Kali! <br>";               // akan mencetak Hello World dari 10 Kali! sampe 1 Kali!
        $i--;                                           // ini namanya "increment ($++) / decrement ($--)
    }
    echo 'Selesai <br> <br>';
?>