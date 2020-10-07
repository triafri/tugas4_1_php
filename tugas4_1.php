<?php
    $beli=8000;
    $jual=7500;
    $untung=300;
    $jumlah=($beli-$jual)/$untung;

    echo "Harga Beli = Rp $beli <br>";
    echo "Harga Jual = Rp $jual <br>";
    echo "Keuntungan = Rp $untung <br>";
    echo "Berpa jumlah kambing yan dibeli? Jawaban : ",ceil($jumlah)," ekor"


?>