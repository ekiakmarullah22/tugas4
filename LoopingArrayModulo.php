<?php
echo "<h3> Soal Nomor 2 Looping Array Modulo</h3>";
/* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */
$numbers = [18, 45, 29, 61, 47, 34];
echo "Array Numbers : ";
print_r($numbers);
//Looping disini
echo "<br/>";
/*
Langkah penyelesaian :
1. looping isi array menggunakan foreach
2. cek sisa bagi angka dengan % 5
3. print out hasil sisa bagi
*/
$rest = [];
foreach($numbers as $key => $value) {
    $rest[] = $value % 5; 
}
echo "Array sisa baginya adalah : ";
print_r($rest);
echo "<br/>";