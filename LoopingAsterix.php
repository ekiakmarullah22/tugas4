<?php

echo "<h3>Soal No 4 Asterix </h3>";

/* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";
/* 
Langkah penyelesaian bisa dengan menggunakan nested looping for
looping pertama melakukan perulangan ke samping horizontal
loopig kedua melakukan perulangan secara vertical
kondisi looping sebanyak 5
*/

//lakukan looping disini
for($i=0; $i<=5; $i++) {
    for($j = $i; $j >= strlen($i); $j--) {
        echo "*";
        //echo "<br/>";
    }
    echo "*";
    echo "<br/>";
}

//echo "</br>";