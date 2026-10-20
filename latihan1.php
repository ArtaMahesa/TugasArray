<?php
$nim = "250030078";
$nama = "I Made Mahesa Arta";
$kodeJurusan = "SI";
$angkatan = 2025;
$umur = 19;
$gender = "Laki-laki";
$hobi = ["Bermain game Gensin"];

echo "Biodata Mahasiswa<br>";
echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Kode Jurusan: $kodeJurusan<br>";
echo "Angkatan: $angkatan<br>";
echo "Umur: $umur tahun<br>";
echo "Gender: $gender<br>";
echo "Hobi: " . implode(", ", $hobi);
?>
