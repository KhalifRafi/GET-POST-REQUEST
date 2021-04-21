<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    h1, table{
        text-align: center;
    }
    table{
        width: 100%;
    }
    a{
        text-decoration: none;
    }
    </style>
    <title>Data Tabung</title>
</head>
<body>
    <h1>Data Ukuran Tabung</h1>
    <?php

    $namaFile = "datatabung.txt";
    $myfile = fopen($namaFile, "r") or die ("Tidak bisa buka file!");
    $pecahFile = explode(",", fread($myfile, filesize($namaFile)));
    $tabungSatu = $pecahFile[0];
    $diameterSatu = $pecahFile[1];
    $tinggiSatu = $pecahFile[2];   
    
    $tabungDua = $pecahFile[3];
    $diameterDua = $pecahFile[4];
    $tinggiDua = $pecahFile[5];
    
    $tabungTiga = $pecahFile[6];
    $diameterTiga = $pecahFile[7];
    $tinggiTiga = $pecahFile[8];
    
    $tabungEmpat = $pecahFile[9];
    $diameterEmpat = $pecahFile[10];
    $tinggiEmpat = $pecahFile[11];
    
    $tabungLima = $pecahFile[12];
    $diameterLima = $pecahFile[13];
    $tinggiLima = $pecahFile[14];
    
    fclose($myfile);

    echo "<table border='1' cellspacing='0' cellpadding='10'>";
        echo "<tr>";
            echo "<th>NAMA TABUNG</th>";
            echo "<th>DIAMETER</th>";
            echo "<th>TINGGI</th>";
            echo "<th>LUAS</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>$tabungSatu</td>";
            echo "<td>$diameterSatu</td>";
            echo "<td>$tinggiSatu</td>";
            echo "<td><a href=http://localhost/sem4%20(pmr%20web)/pertemuan%205%20(Get%20&%20post)/project%20Latihan/hitungluas.php?n=A&d=10&t=30>view</td>";
        echo "</tr>";
        echo "<tr>";           
            echo "<td>$tabungDua</td>";
            echo "<td>$diameterDua</td>";
            echo "<td>$tinggiDua</td>";
            echo "<td><a href=http://localhost/sem4%20(pmr%20web)/pertemuan%205%20(Get%20&%20post)/project%20Latihan/hitungluas.php?n=B&d=15&t=34>view</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>$tabungTiga</td>";
            echo "<td>$diameterTiga</td>";
            echo "<td>$tinggiTiga</td>";
            echo "<td><a href=http://localhost/sem4%20(pmr%20web)/pertemuan%205%20(Get%20&%20post)/project%20Latihan/hitungluas.php?n=C&d=8.5&t=27.8>view</td>";    
        echo "</tr>";
        echo "<tr>";        
            echo "<td>$tabungEmpat</td>";
            echo "<td>$diameterEmpat</td>";
            echo "<td>$tinggiEmpat</td>";
            echo "<td><a href=http://localhost/sem4%20(pmr%20web)/pertemuan%205%20(Get%20&%20post)/project%20Latihan/hitungluas.php?n=D&d=12.8&t=17.56>view</td>";
        echo "</tr>";
        echo "<tr>";        
            echo "<td>$tabungLima</td>";
            echo "<td>$diameterLima</td>";
            echo "<td>$tinggiLima</td>";
            echo "<td><a href=http://localhost/sem4%20(pmr%20web)/pertemuan%205%20(Get%20&%20post)/project%20Latihan/hitungluas.php?n=E&d=13.125&t=15.7>view</td>";
        echo "</tr>";    
    echo "</table>";
    ?>
</body>
</html>