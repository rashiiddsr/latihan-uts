<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Faktur</title>
</head>
<body>
    Hasil Faktur <hr>
    <?php
        $np = $_POST['np'];
        $jps = $_POST['jps'];
        $jp = $_POST['jp'];
        $tp = $_POST['tp'];
        $hs = 0;

        if ($jps=="Caramel Latte")
            $hs = 15000;
        else if ($jps=="Vanilla Latte")
            $hs = 20000;
        else if ($jps=="Americano")
            $hs = 13000;
        else if ($jps=="Cappucino")
            $hs = 20000;
        else if ($jps=="Kopi Susu")
            $hs = 23000;

        $htp = ($tp == "Panas") ? 5000 : 7000;

        $ha = ($hs + $htp) * $jp;
        $adm = $ha * 10/100;
        $pp = ($jp > 10) ? 20000 : 0;
        $tb = $ha + $adm - $pp;

        echo "Nama Pelanggan : $np <br>";
        echo "Jenis Pesanan : $jps <br>";
        echo "Harga Satuan : $hs <br>";
        echo "Tipe Pesanan : $tp (Biaya : $htp) <br>";
        echo "Jumlah Pesanan : $jp <br>";
        echo "Harga Akhir : $ha <br>";
        echo "Biaya Tambahan : $adm <br>";
        echo "Total Bayar : $tb (Termasuk Potongan : $pp)";
    ?>
</body>
</html>