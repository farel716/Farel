<?php

include 'index.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form method="POST" action="">
    <div class="kotak-barang">
        <h1>Barang</h1>
        <br>
        <label for="nama">Nama barang:</label>
        <input type="text" id="nama"  name="nama" required><br><br>

        <label for="harga">Harga barang:</label>
        <input type="number" id="harga"  name="harga" required><br><br>

        <label for="stok">Stok Awal:</label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="barcode">Barcode barang:</label>
        <input type="number" id="barcode"  name="barcode" required><br><br>

        <label for="nama">Expired barang:</label>
        <input type="date" id="exp" name="exp" required><br><br>

        <label for="pembelian">Jumlah Pembelian:</label>
        <input type="number" id="pembelian" name="pembelian" required><br><br>

        <input type="submit" value="Hitung Stok Akhir">
        </div>

        <div class="kotak-pelanggan">
        <h1>Pelanggan</h1>
        <br>
        <label for="pelanggan">Nama Pelanggan:</label>
        <input type="text" id="pelanggan"  name="pelanggan" required><br><br>
        <label for="noHp">No Hp:</label>
        <input type="number" id="noHp"  name="noHp" required><br><br>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat"  name="alamat" required><br><br>
        </div>
    </form>
    <br><br>

    <div class="kotak-luar">
    <?php if ($Stokakhir !== null):?>
        <div class="kotak">
        <h2>Nama Barang: <?= $nama; ?></h2>
        <h2>Harga Barang: <?= $harga; ?></h2>
        <h2>Stok Barang: <?= $stok; ?></h2>
        <h2>Barcode Barang: <?= $barcode; ?></h2>
        <h2>Expired Barang: <?= $exp; ?></h2>
        <h2>Pembelian Barang: <?= $pembelian; ?></h2>
        <h2>Stok Akhir: <?= $Stokakhir; ?></h2>
        </div>
        <div class="kotak2">
        <h2>Nama Pelanggan: <?= $pelanggan; ?></h2>
        <h2>No Hp: <?= $noHp; ?></h2>
        <h2>Alamat: <?= $alamat; ?></h2>
        </div>
    <?php endif;?>
    </div>

</body>
</html>