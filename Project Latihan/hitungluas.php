<?php

$nama = $_GET['n'];
$diameter = $_GET['d'];
$tinggi = $_GET['t'];

$jari = $diameter / 2;
$luas = 2 * pi() * $jari * $jari;
$pembulatanLuas = round($luas);

echo "Luas tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $pembulatanLuas satuan luas";

?>