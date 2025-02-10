<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $sekunda=date('s')?>
    <?php $kolor= $sekunda%2==0 ? 'RED' : 'BLUE'?>
    <p style="font-size:220px; text-align:center; font-weight:bold; border: solid 20px <?= $kolor ?>; color: <?= $kolor ?> "><?= date('H:i:s') ?></p>
</body>