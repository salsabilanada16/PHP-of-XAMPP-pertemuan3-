<?php
    // Pengkodisian / Conditionals                      
    // if

    $angka = 25;                                                // pengulangannya hanya sekali, kalau while dan for tadi berhenti saat false 
    if($angka < 10 && $angka >= 1) {                            // kalau && harus dua kondisi yang true tapi kalau or (||) bisa salah satu aja yang true baru mencetak "Anda Benar!"
        echo "Anda Benar! <br>";
    } else if($angka == 25) {                                   // ini terkecuali, tapi kalau angka awalnya bukan 25 maka akan menampilkan "Anda Salah!"
        echo "$angka adalah angka favorit saya! <br><br><br>";
    } else {                                                    // kalau if itu pake else, jadi kalau tidak memenuhi yang di atas maka akan mencetak ini
        echo "Anda Salah! <br><br>";
    }


    // Pengulangan dan pengkodisian bisa digabung, bisa dimasukkan pengkodisian ke pengulangan atau sebaliknya
    for($angka =1; $angka <= 10; $angka++) {
        if($angka % 2 == 0) {
            echo "$angka adalah bilangan GENAP! <br>";
        } else {
            echo "$angka adalah bilangan GANJIL! <br>";
        }
    }
?>