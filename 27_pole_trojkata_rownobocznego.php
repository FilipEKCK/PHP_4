<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $a=17 ?>
    <?php $p=(3*$a)/2 ?>
    <?php $pole=sqrt($p*($p-$a)*($p-$a)*($p-$a)) ?>
    <p style="text-align:center;border: solid darkorange; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 25px; border-left-width: 25px"> Pole trójkąta równobocznego o boku długości <?= $a ?> jest równe <?= round($pole,3) ?> j<sup>2</sup></p>
</body>
</html>