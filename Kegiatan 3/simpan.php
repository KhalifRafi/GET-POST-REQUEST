<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tglLahir = $_POST['tgllhr'];
$tempatLhr = $_POST['tmptlhr'];
echo "data yang ditambahkan yaitu : $nim | $nama | $tglLahir | $tempatLhr";

$namaFile = "datamhs.txt";
$myfile = fopen($namaFile, "a") or die("File error!");
fwrite($myfile, "$nim|$nama|$tglLahir|$tempatLhr\n");
fclose($myfile);

?>