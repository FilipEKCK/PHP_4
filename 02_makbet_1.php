<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $string = "Niech będzie, co będzie; czas wszystko równo w swym unosi pędzie" ?>
    <p>Cytat:<q><?= $string ?> </q></p> 
    <p> Libczba znaków:  <?= strlen($string) ?> </p>
</body>
</html>