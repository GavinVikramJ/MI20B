<?php

$biodata = array(
    "Nama : Gavin Vikram Juniwan",
    "Alamat : Kota Tasikmalaya",
    "NO HP : 0866666666",
);

$matkul = array(
    "Senin : SDA",
    "RABU : ESP1 , Web Programing",
    "Kamis : ERP , NOS",
    "Jumat : JAVA , DCS",
    "Sabtu : M Programing",  
);


?>
<!DOCTYPE html>
<html>
<head>
    <title>WEEK 2 - Gavin Vikram Juniwan</title>
</head>
<body>    
    <?php
       echo "BIODATA";
       echo "<br>";
       echo "<br>";
       echo $biodata[0];
       echo "<br>";
       echo $biodata[1];
       echo "<br>";
       echo $biodata[2];
       echo "<br>";
       echo "Saya mengikuti jadwal Perkuliahan di bawah :";
       echo "<br>";
       echo $matkul[0];
       echo "<br>";
       echo $matkul[1];
       echo "<br>";
       echo $matkul[2];
       echo "<br>";
       echo $matkul[3];
       echo "<br>";
       echo $matkul[4];

    ?>
</body>
</html>