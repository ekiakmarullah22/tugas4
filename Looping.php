<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LOOPING</title>
</head>
<body>

<h1>Berlatih Looping</h1>
<h1>Looping Ascending : Dari Kecil ke Besar</h1>

<?php

    echo "<h3>Soal Nomor 1 Looping Genap Print Out I Love PHP</h3>";
    //Looping disini
    for($i=1; $i <= 20; $i++) {
        //cek sisa bagi untuk genap
        if($i % 2 == 0) {
            //print angka genap digabung dengan string I LOVE PHP
            echo $i . " - " . "I LOVE PHP" . "<br/>";
        }
    }

?>

<h1>Berlatih Looping</h1>
<h1>Looping Descending : Dari Besar ke Kecil</h1>

<?php

    echo "<h3>Soal Nomor 1 Looping Genap Print Out I Love PHP</h3>";
    //Looping disini
    for($i=20; $i >= 1; $i--) {
        //cek sisa bagi untuk genap
        if($i % 2 == 0) {
            //print angka genap digabung dengan string I LOVE PHP
            echo $i . " - " . "I LOVE PHP" . "<br/>";
        }
    }

?>
    
</body>
</html>