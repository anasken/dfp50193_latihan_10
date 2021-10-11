<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h1>BMI</h1>
    <?php
    $berat = 60;
    $tinggi = 1.6;
    $bmi = 0;
    ?>
    <table>
        <tr>
            <td>Berat:</td>
            <td><?php echo $berat; ?>Kilogram</td>
        </tr>
        <tr>
            <td>Tinggi:</td>
            <td><?php echo $tinggi; ?> meter</td>
        </tr>
        <tr>
            <td>BMI:</td>
            <td><?php echo $bmi; ?></td>
        </tr>
    </table>

    <p>
        BMI this guy is <?php echo number_format(bmi($berat, $tinggi)); ?>
    </p>
</body>
</html>

<?php
function bmi($berat, $tinggi){
    $totalBMI = $berat / ($tinggi * 2);
    return $totalBMI;
}