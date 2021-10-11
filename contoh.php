<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Function</title>
</head>
<body>
    <h1>Contoh Function</h1>

    <?php
    $harga = 1.70;
    $berat = 2;
    ?>

    <p>
        Harga sekilogram buah betik adalah <?php echo number_format($harga,2); ?>
        <br>
        Untuk <?php echo $berat; ?>KG, total harga adalah <?php echo number_format(kira($harga, $berat)); ?>
        RM<?php echo number_format(kira($harga, $berat)); ?>
    </p>
</body>
</html>

<?php
function kira($harga, $berat){
    $total = $harga * $berat;
    return $total;
}