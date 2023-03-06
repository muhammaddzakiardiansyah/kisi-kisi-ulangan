<?php 

// soal nomer 1

$jamKerja = 5 ;

if($jamKerja <= 8) {
    $gaji = "anda tidak berhak mendapatkan gaji lembur!";
} else {
    $gaji = "anda berhak mendapatkan gaji lembur";
}

echo $gaji;

// soal nomer 2

$nasabah = "vip";

if($nasabah == "vip") {
    $hasil = "anda memilih nasabah kelas $nasabah dengan fasilitas mendapatkan kartu atm, buku tabungan, akses m-banking dan menjadi prioritas!";
} else if($nasabah == "kelas 1") {
    $hasil = "anda memilih nasabah kelas $nasabah dengan fasilitas mendapatkan kartu atm, buku tabungan dan akses m-banking!";
} else if($nasabah == "kelas 2") {
    $hasil = "anda memilih nasabah kelas $nasabah dengan fasilitas mendapatkan kartu atm dan buku tabungan!";
} else {
    $hasil =  "maaf input yang anda masukan tidak valid!";
}

// echo $hasil;

// soal nomer 3

for($i = 21; $i <= 30; $i++) {
   echo $i . "<br>";
}

// soal nomer 4

$i = 3;
while($i<=60) {
    echo $i . "<br>";
    $i = $i+3;
}

for($i = 3; $i <= 60; $i= $i+3) {
    echo $i . "<br>";
}

// soal nomer 5

$company = ["Toyota", "Daihatsu", "Honda", "Ford", "Ferari"];

echo  "ini perusahaan " . $company[4];
echo "<br>";
echo "ini perusahaan " . $company[1] . " dan " . $company[2];