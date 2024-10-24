<?php

include 'otak.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

    <ul>
        <li>
            <label for="stok">Jumlah Stok
                <input type="number" name="stok" id="stok">
            </label>
        </li>
        <li>
            <label for="pembelian">Pembelian
                <input type="number" name="pembelian" id="pembelian">
            </label>
        </li>
    </ul>

    <button type="submit" name="submit">Hitung Stok</button>

    <?php foreach($result as $res) : ?>
    <h5>Hasil Nya Adalah : 
        <h3>
            <?= $hasilAkhir ?>
        </h3>
        <h3>
            <?= $namaBarang ?>
        </h3>
    </h5>
    <?php endforeach; ?>

</form>

</body>
</html>

