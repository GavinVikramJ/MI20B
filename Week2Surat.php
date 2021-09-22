<?php
$tgl = date("d-m-Y") ;
$kota = "Tasikmalaya" ;
$instansi = "LP3I , Kota Tasikmalaya , (0853-566-666)" ;
$ttd = " Galeri Jalanan " ;

?>

<!DOCTYPE html>
<html>
<head>
    <title>WEEK 2 : Surat - Gavin Vikram Juniwan</title>
</head>
<body>    
    <?php
       echo "<b>$kota</b>  " .$tgl;
       echo "<br>";
       echo "<br>";
       echo "Nomor : 0666";
       echo "<br>";
       echo "Perihal : Peminjaman Barang";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "Kepada Yth:";
       echo "<br>";
       echo "$instansi";
       echo "<br>";
       echo "<br>";
       echo "Dengan Hormat, ";
       echo "<br>";
       echo "Kami meminta agar di perkenankan untuk bisa meminjam barang yang ada di perpustakaan: ";
       echo "<br>";
       echo "<br>";
       echo "1. (10) buku Sejarah";
       echo "<br>";
       echo "2. (15) buku Agama";
       echo "<br>";
       echo "3. (5) buku Sastra Bahasa";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "Hormat Kami, ";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "$ttd";
       echo "<br>";
       echo "<br>";
      

    ?>
</body>
</html>